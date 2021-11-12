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
            return $e->getMessage();
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
        $user = User::with('orders')->where('order_code',$id)->where('active',1)->first();
        return response(MyHelper::checkGet($user));
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
    public function update(Request $request, $id)
    {
        // return $request;
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
        $tmp= strtotime(Carbon::parse($request['date'])->format('time'));
        $julian = unixtojd($tmp);
        
        $moon = new MoonPhase($julian);
        $result['phase'] = $moon->phase_name();
        $result['age'] = $moon->get('age');
        return response()->json(MyHelper::checkGet($result));
    }

    public function getCity(){
        $data = City::all();
        return response()->json(MyHelper::checkGet($data));
    }


}
