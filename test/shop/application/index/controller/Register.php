<?php
namespace app\index\controller;
use think\Controller;
use think\Validate;
use think\Db;
class Register extends controller
{
    public function  index(){
        
        // $result = $this->validate(
        //     [
        //     'name' => 'thinkphp',
           
        //     ],
        //     [
        //     'name' => 'require|min:5',
            
        //     ]);
        //     if(true !== $result){
        //     // 验证失败 输出错误信息
        //     dump($result);
        //     }
        //     dump($data);

        $rule = [
                'username' => 'require|min:5',
                'password' => 'require|min:5',
                
                ];
                $msg = [
                'username.require' => '名称必须',
                'username.min' => '名称最少5个字符',
                'password.require' => '密码必须',
                'password.min' => '密码最少5个字符',
                
               ];
    
        // dump($data);die;
        if(request()->isPost()){
            $data =input('post.');
            $validate = new Validate($rule, $msg);
            $result = $validate->check($data);
            if(!$result){
                echo $validate->getError();
            }else{
                if($data['password']==$data['confirmpassword'])
                 {   $res=db('user')->insert($data);
                      if($res){
                            $this->success('添加管理员成功',url('lst'));
                        }else{
                             $this->error('添加管理员失败');
                        }
                 }else{
                    $this->error('两次密码不相同');
                 }

            }
           

        }





        return view();


    }


}
