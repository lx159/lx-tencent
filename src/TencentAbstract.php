<?php
/*
Description: 广点通接口抽象类
Version: 1.0
Author: lx159
*/

namespace Tencent;

abstract Class TencentAbstract{

    //强制要求子类订阅方法
    abstract protected function MakSig($app_id, $app_key);

    abstract protected function MakeRequest($url, $params, $cookie, $method, $protocol='http');

    //普通 不建议
    public function printOut() {
        print $this->MakSig() . "\n";
    }
}

