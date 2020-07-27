<?php


namespace app\api\model;


use think\Model;

class Theme extends Model
{
    public function topicImg(){

        //表包含了外键使用belongsTo()，反则hsaOne()
        return $this->belongsTo('image','topic_img_id','id');
    }



    public function headImg(){
        return $this->belongsTo('image','head_img_id','id');
    }
}