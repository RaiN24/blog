<?php
namespace Home\Controller;
use Think\Controller;
class FenleiController extends BaseController {
    public function index(){
        $id = I('get.id');
        $m =M('fenlei');
        $fenleiInfo = $m ->where("id ={$id}")->find();
        $this ->assign("fenleiInfo",$fenleiInfo);
        $article = D("article");
        $count      = $article->where("fid = '%s' AND status = 0",$id)->count();//
        $Page       = new \Think\Page($count,10);
        $show       = $Page->show();//
        $articleList = $article->where("fid = '%s' AND status = 0",$id)->relation(true)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("articleList",$articleList);
        $this->assign('page',$show);
        $this->display();
    }

    public function php(){
            $id = I('get.id');
            $m =M('fenlei');
            $fenleiInfo = $m ->where("id ={$id}")->find();
            $this ->assign("fenleiInfo",$fenleiInfo);
            $article = D("article");
            $count      = $article->where("fid = '%s' AND status = 0",$id)->count();//
            $Page       = new \Think\Page($count,10);
            $show       = $Page->show();//
            $articleList = $article->where("fid = '%s' AND status = 0",$id)->relation(true)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign("articleList",$articleList);
            $this->assign('page',$show);
            $this->display('index');
        }

    public function huodongkongjian(){
        $id = I('get.id');
        $m =M('fenlei');
        $fenleiInfo = $m ->where("id ={$id}")->find();
        $this ->assign("fenleiInfo",$fenleiInfo);
        $type =M('ac_type')->select();
        $this->assign("ac_type",$type);
        $condition=M('ac_condition')->select();
        $this->assign("ac_condition",$condition);
        $order=M('ac_order')->select();
        $this->assign("ac_order",$order);
        $choose_order = I('get.order',1);
        $choose_condition = I('get.condition',1);
        $choose_type = I('get.type',1);
        $this->assign("choose_order",$choose_order);
        $this->assign("choose_type",$choose_type);
        $this->assign("choose_condition",$choose_condition);
        if($choose_condition!=1){
            $map["condition"]=M('ac_condition')->where("id={$choose_condition}")->find()["condition"];
        }
        if($choose_type!=1){
            $map["type"]=M('ac_type')->where("id={$choose_type}")->find()["type"];
        }
        if($choose_order==1){
            $action=M("activity")->where($map)->order('vote_num desc')->select();
        }else if($choose_order==2){
            $action=M("activity")->where($map)->order('vote_stime')->select();
        }else if($choose_order==3){
            $action=M("activity")->where($map)->order('vote_etime')->select();
        }else{
            $action=M("activity")->where($map)->order('ac_stime')->select();            
        }
        
        $this->assign("action",$action);
        $this->display();
    }

    public function showAction()
    {
        $id = I('get.id');
        $m =M('fenlei');
        $fenleiInfo = $m ->where("id ={$id}")->find();
        $this ->assign("fenleiInfo",$fenleiInfo);
        $ac_id= I('get.ac_id',1);
        $vo=M('activity')->where("id={$ac_id}")->find();
        $this->assign('title',$vo['title']);
        $this->assign('poster',$vo['poster']);
        $this->assign('vote_stime',$vo['vote_stime']);
        $this->assign('vote_etime',$vo['vote_etime']);
        $this->assign('ac_stime',$vo['ac_stime']);
        $this->assign('ac_etime',$vo['ac_etime']);
        $this->display();
    }

    public function xinlinzhisheng(){
        $id = I('get.id');
        $m =M('fenlei');
        $fenleiInfo = $m ->where("id ={$id}")->find();
        $this ->assign("fenleiInfo",$fenleiInfo);
        $article = D("article");
        $count      = $article->where("fid = '%s' AND status = 0",$id)->count();//
        $Page       = new \Think\Page($count,10);
        $show       = $Page->show();//
        $articleList = $article->where("fid = '%s' AND status = 0",$id)->relation(true)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("articleList",$articleList);
        $this->assign('page',$show);
        $this->display('index');
    }

    public function lanqiu(){
        $id = I('get.id');
        $m =M('fenlei');
        $fenleiInfo = $m ->where("id ={$id}")->find();
        $this ->assign("fenleiInfo",$fenleiInfo);
        $video=M('video');
        $arr=$video->where("fenlei= 'lanqiu' ")->order("id desc")->select();
        $this->assign('arr',$arr);
        $this->display();

    }

    public function zuqiu(){
        $id = I('get.id');
        $m =M('fenlei');
        $fenleiInfo = $m ->where("id ={$id}")->find();
        $this ->assign("fenleiInfo",$fenleiInfo);
        $video=M('video');
        $arr=$video->where("fenlei= 'zuqiu' ")->order("id desc")->select();
        $this->assign('arr',$arr);
        $this->display();
    }

    public function xiaoyouxi(){
        $id = I('get.id');
        $m =M('fenlei');
        $fenleiInfo = $m ->where("id ={$id}")->find();
        $this ->assign("fenleiInfo",$fenleiInfo);
        $this->display();
    }
}
