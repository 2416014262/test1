<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin;
class Login extends controller
{
    public function  index(){
        if(request()->isPost()){
            $this->check(input('code'));// 验证码检测
            $admin=new Admin();
            $res=$admin->login(input('post.'));
            if($res==1){
                $this->error('用户不存在');
            }
            if($res==2){
                $this->success('登录成功',url('index/index'));
            }
            if($res==3){
                $this->error('密码错误');
            }

        }
        return view();
    }
    // 验证码检测
    public function check($code='')
    {
        if (!captcha_check($code)) {
            $this->error('验证码错误');
        } else {
            return true;
        }
    }


}
