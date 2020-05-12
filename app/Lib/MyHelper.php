<?php

namespace App\Lib;

class MyHelper{
    public function __construct()
    {
        global $config;
    }
    public static function unique_random($digit)
    {

        srand((float) microtime() * 1000000);
        $i = 0;
        $random = '';
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        while ($i < $digit) {
            $num = rand() % strlen($chars);
            $tmp = substr($chars, $num, 1);
            $random = $random . $tmp;
            $i++;
        }

        return $random;
    }
    public static function  checkCreate($data, $returnAll = false)
    {
        if ($data) return ['status' => 'success', 'result' => $data];
        else return ['status' => 'fail', 'result' => ['Failed to insert data.']];
    }

    public static function checkGet($data)
    {
        if($data && !empty($data) && count($data) > 0)return['status'=>'success','result'=>$data];
        else if(empty($data)|| count($data) == 0)return['status'=>'fail','result'=>['Data not Found']];
        else return ['status'=>'fail','result'=>['Failed to show data']];
    }

    public static function checkUpdate($data)
    {
        if($data) return ['status' => 'success', 'result' => $data];
        else return ['status' => 'fail', 'result' => ['Failed to update data']];
    }

    public static function checkDelete($data)
    {
        if($data) return ['status' => 'success', 'result' => $data];
        else return ['status' => 'fail', 'result' => ['Failed to delete data']];
    }
}

?>