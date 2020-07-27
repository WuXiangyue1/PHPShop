<?php


namespace app\api\model;


use think\Model;

class Image extends Model
{

    protected $visible = ['url'];

    public function getUrlAttr($value,$data){

        if($data['from'] == 1){
            //http://shop.com/images/banner-4a.png
            return config('setting.img_prefix').$value;
        }else{
            return $value;
        }


    }

}