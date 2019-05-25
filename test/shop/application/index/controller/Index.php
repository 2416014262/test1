<?php
namespace app\index\controller;
use app\index\model\Article as ArticleModel;
use think\Db;

use app\index\model\Cate as CateModel;
class Index extends Common
{
    public function index()
    {
        $articleM=new \app\index\model\Article();
        $newArtiecleRes=$articleM->getNewArticle();
        // $siteHotArt=$articleM->getSiteHot();
        $recArt=$articleM->getRecArt();
        //获取推荐栏目
        $cateM=new \app\index\model\Cate();
        $recIndex=$cateM->getRecIndex();
        // dump($newArtiecleRes);die;
        //友情链接数据
        // $linkRes=db('link')->order('sort desc')->select();
        $this->assign(array(
            'newArtiecleRes'=>$newArtiecleRes,
            // 'siteHotArt'=>$siteHotArt,
            // 'linkRes'=>$linkRes,
            'recArt'=>$recArt,
            'recIndex'=>$recIndex,
            ));
        return view();
    }
    public function useredit($userid)
    {
        // dump($userid);die;
        $admins=Db::table('sp_user')->find($userid);
         if(request()->isPost()){
             $data=input('post.');
             if(!$data['username'])
             {
                $this->error('非法操作,用户不存在');
            }
            // dump($data);die;
            // $res=$data->save(['username'=>$data['username'],'password'=>$data['password']],['id'=>$userid]);
            $res=db('user')->update(input('post.'));
            if($res!==false){
                $this->success('修改成功',url('index/index'));               
            }else{
                $this->error('修改失败');              
            }
            return;  
        }
        if(!$admins){
                $this->error('用户不存在');
            }
            $this->assign('admin',$admins);   //对ist的编辑按键的id传值的数据进行判断

            return $this->fetch(); 

        return view();
    }
    public function add()
    {
        if(request()->isPost()){
            $data=input('post.');
            $data['time']=time();
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
                $this->success('添加文章成功',url('index'));
            }else{
                $this->error('添加文章失败');
            }


         }   
         $cate=new  CateModel();        
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        return view();//助手函数
    }
   


}
