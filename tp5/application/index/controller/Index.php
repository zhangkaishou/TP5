<?php
namespace app\index\controller;

use think\Controller;
class Index extends Controller
{
    public function index()
    {
    	$data = db('user')->select();    	
    	$len = sizeof($data); 	
    	// dump($data);dump($len);  
    	$this->assign('data',$data);
    	$this->assign('len',$len);
    	return $this->fetch('login');
    }

    public function home(){
    	$data = db('all')->select();
    	// dump($data);
    	$in = $data[0]['income'];
    	$sa = $data[0]['saleroom'];
    	$tot = $data[0]['totalroom'];
    	$avg = $in/$sa;
    	$per = $sa/$tot*100;    	
    	$this->assign('data',$data);
    	$this->assign('avg',$avg);
    	$this->assign('per',$per);
    	return $this->fetch();
    } 
}
