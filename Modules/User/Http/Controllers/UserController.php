<?php

namespace Modules\User\Http\Controllers;

use App\Lib\MoonPhase;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Lib\MyHelper;
use App\Models\User;
use DB;
use Carbon\Carbon;
use App\Models\City;
use App\Models\Order;
use Symfony\Component\Console\Helper\Helper;
use Modules\User\Http\Requests\UserRequest;
use Modules\User\Http\Requests\OrderRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data = User::with('city:id_city,city_name')->get()->sortByDesc("created_at");
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(UserRequest $request)
    {
        DB::beginTransaction();
        try {
            $post=$request->only(['name','phone','email','address','id_city','postal_code']);
            $post['order_code']=MyHelper::unique_random(6);
            $save1 = User::create($post);
            if($save1){
                $post2=$request->except(['name','phone','email','address','id_city','postal_code']);
                $post2['order_code']= $post['order_code'];
                $save2 = Order::create($post2);
            }
            if($save2){
                DB::commit();
                return response()->json(MyHelper::checkCreate($save2));
            }
        } catch (\Exception $e) {
            DB::rollback();
            $result = [
                'status'    => 'fail',
                'messages'    => ['Something went wrong']
            ];
            return response()->json($result);
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $order = Order::with(['user'=>function($q){
            $q->where('user.active',1);
        }])->where('order_code',$id)->get();
       
        return response()->json(MyHelper::checkGet($order));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('user::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $code)
    {
        DB::beginTransaction();
        try{
            $post1 = $request->only(['name', 'phone', 'email', 'address', 'id_city', 'postal_code']);
            $update1 = User::where('order_code', $code)->update($post1);
            if($update1){
                $post2 = $request->except(['name', 'phone', 'email', 'address', 'id_city', 'postal_code','active','deleted_at','created_at','id_user','id','order_code']);
                $update2 = Order::where('order_code', $code)->update($post2);
            }
            if($update2){
                DB::commit();
                return response()->json(MyHelper::checkUpdate($update2));
            }
        } catch (\Exception $e){
            // return $e;
            DB::rollback();
            $result = [
                'status'    => 'fail',
                'messages'    => ['Something went wrong']
            ];
            return response()->json($result);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($code)
    {
        $post['active'] = 0;
        $post['deleted_at']=Carbon::now();
        $update=User::where('order_code',$code)->update($post);
        return response()->json(MyHelper::checkUpdate($update));
    }

    public function connTest(){
        return 'Testing...';
    }

    public function moonPhase(Request $request)
    {
        
        $tmp = strtotime($request['date']);
        $tmp=$tmp-7200;
        $moon = new MoonPhase($tmp);
        $result['phase'] = $moon->phase_name();
        $result['age'] = $moon->get('age');
        return response()->json(MyHelper::checkGet($result));
    }

    public function getCity(){
        $result = City::all();
        return response()->json(MyHelper::checkGet($result));
    }

    public function bestSeller(){
        $graphs[0] = Order::select(DB::raw('
        (select count(Case When order.design = 0 Then 1 Else Null End)) as amount
        '))->get();
        $graphs[1] = Order::select(DB::raw('
        (select count(Case When order.design = 1 Then 1 Else Null End)) as amount
        '))->get();
        $graphs[2] = Order::select(DB::raw('
        (select count(Case When order.design = 2 Then 1 Else Null End)) as amount
        '))->get();
        for($i=0;$i<=sizeof($graphs);$i++){
            if($i==0){
                $graph[0]['design']='All Black';
                $graph[0]['amount'] = $graphs[0][0]['amount'];
            }else if($i==1){
                $graph[1]['design'] = 'Black on White';
                $graph[1]['amount'] = $graphs[1][0]['amount'];
            }else{
                $graph[2]['design'] = ' White on Black';
                $graph[2]['amount'] = $graphs[2][0]['amount'];
            }
        };
          
        return $graph;
    }

}
