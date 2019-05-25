<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class User extends Controller
{
   
    public function  login(){
        if(request()->isPost()){
             $data=input('post.');
             // dump($data);die;
        $res=Db::table('sp_user')->where('username',$data['username'])->find();
             if(empty($data)||!is_array($data)){
                $this->error('用户不存在');
            }else
            {
                if($data['password']==$res['password']){
                   session('userid',$res['userid']);
                   session('username',$res['username']);
                   $this->success('登录成功',url('index/index'));

            }else
            {
                    $this->error('密码错误');
            }
            }

        }
        

        return view();


    }
    
    public function logout(){
        session(null);
        $this->success('退出登陆成功',url('user/login'));
           
    }




}
