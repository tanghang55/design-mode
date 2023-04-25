<?php
/**
 * 抽象工厂模式
 * 抽象工厂模式是工厂模式的进一步抽象和推广，它提供了一种创建一系列相关或相互依赖对象的方式，而无需指定它们具体的类。
 */

abstract class parentPay
{
    abstract function pay();
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

//定义抽像工厂类
abstract class factory
{
    abstract function alipay();

    abstract function wechatpay();
}


class  factory1 extends factory
{
    public function wechatpay()
    {
        return new  wechatpay();
    }

    public function alipay()
    {
        return new  alipay();
    }
}

class  factory2 extends factory
{
    public function wechatpay()
    {
        return new  wechatpay();
    }

    public function alipay()
    {
        return new  alipay();
    }
}
$factory = new factory1();
echo $factory->wechatpay()->pay();