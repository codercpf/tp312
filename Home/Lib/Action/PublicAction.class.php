<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/31
 * Time: 21:17
 */

class PublicAction extends Action{
    public function code(){
        import('ORG.Util.Image');
        Image::buildImageVerify();
    }
}