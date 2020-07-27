<?php


namespace app\api\model;




use think\facade\Log;
use think\Model;

class Banner extends Model
{

    protected $table = 'banner';

    protected $hidden = ['delete_time'];

    public function items(){
        return $this->hasMany(BannerItem::class,'banner_id','id');
    }

//    public static function getBannerById($id){
//        //TODO:根据Id获取Banner信息
//
//        try{
//            1/0;
//        }catch (\Exception $e){
//           Log::error("00000".$e);
//            throw $e;
//        }
//        return "this is banner info";
//    }

    public static function getBannerById($id){
        $banner = self::with(['items','items.img'])->find($id);
//        $data = $banner->toArray();
//        unset($data['delete_time']);
        return $banner;
    }

    public function getTheme(){

    }




}