<?php
namespace app\admin\controller;
class User extends Common
{
    public function lst()
    {            
        $userres=db('user')->paginate(10);
        $this->assign('userres',$userres);
        return view();
    } 


        public function del(){
        $del=db('user')->delete(input('id'));
        if($del){
            $this->success('删除成功',url('lst'));
        }else{
            $this->error('删除失败');
        }
    }


}
 