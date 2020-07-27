<?php


namespace app\api\validate;



use think\Exception;
use think\facade\Request;
use think\Validate;

class BaseValidate extends Validate
{

    public function goCheck(){
        //1获取参数 2对参数做校验

        $request = Request::instance();
        $params = $request->param();
        $result = $this->check($params);
        if(!$result){
            $error =  $this->getError();
            throw new Exception($error);
        }else{
            return true;
        }


    }

}