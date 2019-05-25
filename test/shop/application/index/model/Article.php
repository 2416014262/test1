<?php
namespace app\index\model;
use think\Model;
use app\index\model\Cate;
class Article extends Model
{
     public function getAllArticles($cateid){
        $cate=new Cate();
        $allCateID=$cate->getchilrenid($cateid);
        // dump($allCateID);die;
        $artRes=db('article')->where("cateid IN($allCateID)")->order('id desc')->paginate(2);
         // dump($artRes);die;

        return $artRes;
    }
    public function getNewArticle(){
        $newArtiecleRes=db('article')->field('a.id,a.title,a.desc,a.thumb,a.click,a.zan,a.time,c.catename')->alias('a')->join('sp_cate c','a.cateid=c.id')->order('a.id desc')->limit(1,4)->select();
        return $newArtiecleRes;
    }
    public function getRecArt(){
        $recArt=$this->field('id,title,thumb')->order('id desc')->limit(5)->select();
        return $recArt;
    }
    public function getSerRec(){
        $SerRec=$this->field('id,title,thumb')->order('id desc')->limit(5)->select();
        return $SerRec;
    }

    protected static function init()  //构子函数
    {
       Article::event('before_insert', function ($article) 
       {           
            if($_FILES['thumb']['tmp_name'])
            {
                $file = request()->file('thumb');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                // $thumb=(ROOT_PATH . 'public' . DS . 'uploads'.'/'.$info->getExtension());
                    $thumb='/shop/'.'public'.DS.'uploads'.'/'.$info->getSaveName();
                    $article['thumb']=$thumb;
                }
            } 
           
        });


       Article::event('before_update', function ($article) 
       {           
            if($_FILES['thumb']['tmp_name'])
            {
                $arts=Article::find($article->id);
                $thumbpath=$_SERVER['DOCUMENT_ROOT'].$arts['thumb'];
                if(file_exists($thumbpath)){
                    @unlink($thumbpath);
                }
                $file = request()->file('thumb');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    // $thumb=ROOT_PATH . 'public' . DS . 'uploads'.'/'.$info->getExtension();
                    $thumb='/shop/' . 'public' . DS . 'uploads'.'/'.$info->getSaveName();
                    $article['thumb']=$thumb;
                }
            } 
           
        });
    }
    
}
