<?php


namespace app\lib\exception;


class BaseException
{
    //HTTP 状态码 404，200
    public $code = 400;

    //信息
    public $msg = '参数错误';

    //自定义错误码
    public $errorCode = 10000;


}