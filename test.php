<?php
/*
Description: 测试自动加载.
Version: 1.0
Author: lx159
*/
require_once __DIR__ . '/vendor/autoload.php';

use Tencent\TencentApi;

class aa extends TencentApi{

    public function MakSig($app_id, $app_key, $test = '')
    {
        $app_id = "1111111";
        $app_key = "2222222";
        $test = "33333";
        return parent::MakSig($app_id, $app_key, $test);
    }
}
$aa = new aa();
echo $aa->MakSig();
//$aa->printOut();
//echo $aa->printOut(1111);