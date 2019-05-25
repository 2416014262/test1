<?php
namespace app\admin\controller;
use app\admin\model\Cate as CateModel;
use think\Db;
class Cate extends Common
{

    protected $beforeActionList = [         //前置操作 
        // 'first',
        // 'second' => ['except'=>'hello'],
        'delsoncate' => ['only'=>'del'], //执行del前执行delsoncate
    ];


    
    public function lst()
    {   //return view();         //助手函数
        // if(!session('id')||session('name')){
        //     $this->error('尚未登录系统',url('login/index'));
        // }
         $cate=new  CateModel();
        if(request()->isPost()){
            // print_r(input('post.'));die;
            $sort=input('post.');
            foreach ($sort as $k => $v) {
                $cate->update(['id'=>$k,'sort'=>$v]);
            }


        }
       
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        return view();
    } 
    public function add(){
        $cate=new CateModel();
        if(request()->isPost()){     
        // dump(input('post.'));die;       
            $add=$cate->save(input('post.')); 
            if($add){
                $this->success('添加栏目成功',url('lst'));
            }else{ 
                $this->error('添加栏目失败');
            }
        }
         $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);            
        return $this->fetch();
    }
    public function del(){
        $del=db('cate')->delete(input('id'));
        if($del){
            $this->success('删除成功',url('lst'));
        }else{
            $this->error('删除失败');
        }
    }


    public function delsoncate(){  //可以接受到id  在Model层处理
        $cateid=input('id');
        $cate=new CateModel();
        $sonids=$cate->getchildrenid($cateid);
        if($sonids){
            db('cate')->delete($sonids);
        }        

    }
    public function edit($id){
        $cate=new  CateModel();  
        // echo $id;die;    
        // dump(input('post.'));die;     
        if(request()->isPost()){  
            $data=input('post.'); 
            $cate::where('id','=',$data['id'])->delete() ;        
           $save=$cate->save($data,['id'=>$data['id']]);
            if($save !== false){
                $this->success('修改栏目成功！',url('lst'));
            }else{
                $this->error('修改栏目失败！');
            }
            return;                              //对修改后的数据判断并写入库
        }
        $cates=$cate->find(input('id'));
        $cateres=$cate->catetree();
        $this->assign(array('cateres'=>$cateres,
                             'cates'=>$cates
            ));  
        

        return view();

    }






}
 