<?php
namespace app\index\model;
use think\Model;
class Cate extends Model
{
    public function getchilrenid($cateid){
        $cateres=$this->select();
        $arr=$this->_getchilrenid($cateres,$cateid);
        $arr[]=$cateid;
        $strId=implode(',', $arr);
        return $strId;
    }
     public function _getchilrenid($cateres,$cateid){
        static $arr=array();
        foreach ($cateres as $k => $v) {
            if($v['pid'] == $cateid){
                $arr[]=$v['id'];
                $this->_getchilrenid($cateres,$v['id']);
            }
        }

        return $arr;
    }
    public function getCateInfo($cateid){
        $cateInfo=$this->field('catename,keywords,desc')->find($cateid);
        return $cateInfo;
    }

    
     public function getparents($cateid){
        $cateres=$this->field('id,pid,catename')->select();
        $cates=db('cate')->field('id,pid,catename')->find($cateid);
        $pid=$cates['pid'];
        if($pid){
            $arr=$this->_getparentsid($cateres,$pid);
        }
        $arr[]=$cates;
        return $arr;
    }

    public function _getparentsid($cateres,$pid){
        static $arr=array();
        foreach ($cateres as $k => $v) {
            if($v['id'] == $pid){
                $arr[]=$v;
                $this->_getparentsid($cateres,$v['pid']);
            }
        }

        return $arr;
    }
     public function getRecIndex(){
        $recIndex=$this->order('id desc')->limit(1,3)->select();
        return $recIndex;
    }



    public function catetree(){
        $cateres=$this->order('sort desc')->select();
        return $this->sort($cateres);
        

    }

    public function sort($data,$pid=0,$level=0){
        static $arr=array();
        foreach ($data as $key => $v) {
            if($v['pid']==$pid){
                $v['level']=$level;
                $arr[]=$v;
                $this->sort($data,$v['id'],$level+1);

            }
        }
        return $arr;
    }

    public function getchildrenid($cateid){
        $cateres=$this->select();
        return $this->_getchildrenid($cateres,$cateid);
    }

    public function _getchildrenid($cateres,$cateid){
        static $arr=array();  
        foreach ($cateres as $k => $v) {
            if($v['pid']==$cateid){
                $arr[]=$v['id'];
                $this->_getchildrenid($cateres,$v['id']);
            }
        }
        return $arr;
    }

}
