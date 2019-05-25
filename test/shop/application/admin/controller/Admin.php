<?php
namespace app\admin\controller;
use app\admin\model\Admin as AdminModel;
class Admin extends Common
{
    
    public function lst()
    {   //return view();         //助手函数
        // if(!session('id')||session('name')){
        //     $this->error('尚未登录系统',url('login/index'));
        // }
        $admin=new  AdminModel();
        $adminres=$admin->getadmin();
        $this->assign('adminres',$adminres);
        return $this->fetch();
    } 


     public function add()
    {   //return view();         //助手函数
        if(request()->isPost()){
            $admin=new  AdminModel();
            $res=$admin->addadmin(input('post.'));
            if($res){
                $this->success('添加管理员成功',url('lst'));
            }else{
                 $this->error('添加管理员失败');
            }

            return;
       } 
       return $this->fetch();
    }



    public function edit($id)
    {   //return view();         //助手函数
        $admins=db('admin')->field('id,name,password')->find($id);      //查询数据库中是否存在这样的数据
        if(request()->isPost()){
            $data=input('post.');
            if(!$data['name']){
                $this->error('非法操作,用户名为空');
            }
            if(!$data['password']){
                $data['password']=$admins['password'];
            }else{
                $data['password']=md5($data['password']);
            }
            $admin=new AdminModel();
            $res=$admin->save(['name'=>$data['name'],'password'=>$data['password']],['id'=>$id]);


            // $res=db('admin')->update(input('post.'));
            if($res!==false){
                $this->success('修改成功',url('lst'));               
            }else{
                $this->error('修改失败');              
            }
            return;                                         //对修改后的数据判断并写入库
        }
            
            if(!$admins){
                $this->error('管理员不存在');
            }
            $this->assign('admin',$admins);   //对ist的编辑按键的id传值的数据进行判断

            return $this->fetch();  //视图
    }


    public function del($id){
        $admin=new AdminModel();
        $delnum=$admin->deladmin($id);
        if($delnum=='1'){
            $this->success('删除管理员成功',url('lst'));
        }else{
            $this->error('删除失败');
        }
    }

     public function logout(){
        session(null);
        $this->success('成功退出',url('login/index'));
    }





}
 