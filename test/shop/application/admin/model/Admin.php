<?php
namespace app\admin\model;
use think\Model;
class Admin extends Model
{
    public function addadmin($data){

        if(empty($data)||!is_array($data)){ //传的数据非空或是数组
            return false;

        }
        if($data['password']){
            $data['password']=md5($data['password']);
        }
        // dump($this->save($data));die;
        if($this->save($data)){
            return true;
        }else{
            return false;

        }
       
    }


    public function getadmin(){
        return $this::paginate(9,false);  //分页显示管理员10条每页,不开简单模式
    }
    

    public function deladmin($id){
        if($this::destroy($id)){
            return 1;
        }else{
            return 2;
        }
    }

    public function login($data){
           $admin = Admin::getByName($data['name']);
           if($admin){
                if($admin['password']==md5($data['password'])){
                   session('id',$admin['id']);
                   session('name',$admin['name']);

                    return 2;//登录成功
                }else{
                    return 3;//登录失败
                }
           }else{
                return 1;  //用户不存在
           }
    }

   

}
  