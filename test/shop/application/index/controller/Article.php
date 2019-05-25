<?php
namespace app\index\controller;
use think\Request;
class Article extends Common
{
     public function index()
    {

        $artid=input('artid');
        // var_dump($artid);
        db('article')->where(array('id'=>$artid))->setInc('click');
        $articles=db('article')->find($artid);
        $article= new \app\index\model\Article();
        // $hotRes=$article->getHotRes($articles['cateid']);
        $res=db('comment')->field('comment_id,user_id,comment_content,pubtime')->where('artid',$artid)->select();
         // dump($res);die;
        $this->assign(array(
            'articles'=>$articles,
            // 'hotRes'=>$hotRes,
            'artid'=>$artid,
            'res'=>$res,
            ));
        return view('article');
    }

    
    public function addcomment($artid)
    {   //return view();         //助手函数
        // var_dump($artid);DIE;
        $id=$artid;
        $admins=db('article')->field('id')->find($id);
          $this->assign('admins',$admins);
        if(request()->isPost()){
           
            // var_dump(input('post.'));die;
            $data=input('post.');
            // var_dump($data);die;
            $data['pubtime']=time(); 
            $data['user_id']=session('userid'); 
            // $data['username']=session('username');
           $data['artid']=$artid;
            
             // var_dump($data);die;          
            $res=db('comment')->insert($data); 
            if($res){
                // $this->success('添加评论成功',url('index'),$id);
                $this->redirect('index', ['artid' => $id]);
            }else{
                $this->error('添加评论失败');
            }
        } 
        
        return view();

           
                                                 //对修改后的数据判断并写入库
    }

    
}
