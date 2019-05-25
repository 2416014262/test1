<?php
namespace app\index\controller;
use app\index\model\Article;
class Search extends Common
{
    public function index()
    {
        // var_dump($_GET);die;
        $keywords=input('keywords');
        $article=new Article();
        $serRec=$article->getSerRec();

        $serRes=db('article')->order('id asc')->where('title','like','%'.$keywords.'%')->paginate(2,false,$config=['query'=>array('keywords'=>$keywords)]);
        $this->assign(array(
            'serRes'=>$serRes,
            'keywords'=>$keywords,
            'serRec'=>$serRec,

        ));
       
        return view('search');
    }
}
