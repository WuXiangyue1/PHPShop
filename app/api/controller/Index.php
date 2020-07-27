<?php


namespace app\api\controller;


class Index
{

    public function index($id){
        return "hello api index".$id;
    }

}