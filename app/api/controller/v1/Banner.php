<?php


namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;

class Banner
{

    /*
     * @id 获取指定id 的banner信息
     * @url /banner/:id
     * */
    public function  getBanner($id){
        $data = [
            'id' => $id
        ];
        (new IDMustBePostiveInt())->goCheck();

       //$banner = BannerModel::with(['items','items.img'])->find($id);
        $banner = BannerModel::getBannerById($id);
        //$banner->hidden(['update_time','delete_time']);
        //$banner->visible(['id']);
       $result = [
           'code' => 0,
           'data' => $banner
       ];
       $url = config('setting.img_prefix');

        return json($result);


    }

}