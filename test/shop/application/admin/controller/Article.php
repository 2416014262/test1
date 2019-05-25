<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use app\admin\model\Cate as CateModel;
use app\admin\model\Article as ArticleModel;
class Article extends Common
{
    public function lst()
    {
        $articleres=db('article')->field('a.*,b.catename')->alias('a')->join('sp_cate b','a.cateid=b.id')->paginate(2);
         // dump(input('articleres'));die;
        $this->assign('articleres',$articleres); 
        
        return view();//助手函数
    }

    public function add()
    {
        if(request()->isPost()){
            $data=input('post.');
            $data['time']=time();
            // print_r($data);die;
            $article=new  ArticleModel();              
            // if($_FILES['thumb']['tmp_name']){
            //     $file = request()->file('thumb');
            //     $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            //     if($info){
            //         $thumb=(ROOT_PATH . 'public' . DS . 'uploads'.'/'.$info->getExtension());
            //             $data['thumb']=$thumb;
                

            //     }
            // }
            // dump(input('post.'));die;
            if($article->save($data)){
                $this->success('添加文章成功',url('lst'));
            }else{
                $this->error('添加文章失败');
            }


         }   
         $cate=new  CateModel();        
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        return view();//助手函数
    }

    public function edit($id)
    {
        // echo $id;die;
        if(request()->isPost()){
            $article=new ArticleModel;
            $save=$article->update(input('post.'));
             if($save){
                $this->success('修改文章成功！',url('lst'));
            }else{
                $this->error('修改文章失败！');
            }
            return;

        }






        $cate=new CateModel();
        $cateres=$cate->catetree();
        $arts=db('article')->where(array('id'=>$id))->find();
        // dump($arts);die;
        $this->assign(array(
            'cateres'=>$cateres,
            'arts'=>$arts,
            ));
        



        return view();//助手函数
    }

    public function del(){
        if(ArticleModel::destroy(input('id'))){
            $this->success('删除文章成功！',url('lst'));
        }else{
            $this->error('删除文章失败！');
        }
    }






}
