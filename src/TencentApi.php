<?php
/*
Plugin Name: ${PLUGIN_NAME}
Description: 这里写描述.
Version: 1.0
Author: lx159
*/
namespace Tencent;

use Tencent;

class TencentApi extends TencentAbstract{

    //接口token生成
    protected function MakSig($app_id, $app_key, $test = '')
    {
        // TODO: Implement MakSig() method.
        var_dump($app_id, $app_key, $test);
        $time_stamp = time();

        $advertiser_id = $app_id;

        $sig = sha1($app_id.$app_key.$time_stamp);

        $token = base64_encode($advertiser_id . ',' . $app_id . ',' . $time_stamp. ',' . $sig);

        return $token;
    }

    protected  function MakeRequest($url, $params, $cookie, $method, $protocol = 'http')
    {
        // TODO: Implement MakeRequest() method.

    }
}
