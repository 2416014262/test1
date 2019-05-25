<?php
namespace app\index\controller;
use app\index\model\Article;
class Artlist extends Common
{
    public function index()
    {
        $article=new Article();
        $cateid=input('cateid');
        $artRes=$article->getAllArticles($cateid);       
        // $cate=new \app\index\model\Cate();
        // $cateInfo=$cate->getCateInfo($cateid);
        
        $serRec=$article->getSerRec();

        $this->assign('artRes',$artRes);
        $this->assign(array(
            'artRes'=>$artRes,
            'serRec'=>$serRec,
            ));
         // dump($artRes);die;
        return view('artlist');
    }
}
