<?php


namespace app\lib\exception;


use think\exception\Handle;
use think\Response;
use Throwable;

class ExceptionHandler extends Handle
{
    public function render($request, Throwable $e): Response
    {
        return json('~~~~~~'.$e);
    }

}