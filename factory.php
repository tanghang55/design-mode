<?php
/**
 * 工厂模式
 * 工厂模式通过一个工厂类来创建对象，客户端只需要调用工厂类的方法即可获取对象实例。工厂模式可以根据不同的条件创建不同的对象，从而实现灵活的对象创建。
 */

abstract class parentPay
{
    abstract function  pay();
}

class  alipay extends parentPay
{
    function pay()
    {
        echo "alipay";
    }
}

class  wechatpay extends parentPay
{
    function pay()
    {
        echo "wechatpay";
    }
}

class  factory
{
    static function create($type)
    {
        switch ($type) {
            case   "alipay" :
                return new  alipay();
            case   "wechatpay" :
                return new  wechatpay();
            default :
                return null;
        }
    }
}


$alipay = factory::create( "wechatpay" );
echo $alipay->pay();