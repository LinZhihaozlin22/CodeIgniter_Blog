<?php namespace App\Controllers;

use App\Models\blogmodel;

class Page extends BaseController
{
	public function index(){
		$model = new blogmodel();
		$data['news'] = $model->getPost();
		echo view('template/header', $data);
		echo view('page/home');
		echo view('template/footer');
	}

	function post($id){
		$model= new blogmodel();
		$data['post'] = $model->getPost($id);
		echo view('template/header', $data);
		echo view('blog/post');
		echo view('template/footer');
	}

	function all_post(){
		$model = new blogmodel();
		$data['currentPage'] = $this->request->getVar('page_peoples') ? $this->request->getVar('page_peoples') : 1;
		$data['table'] = $model->paginate(6, 'post');
		$data['pager'] = $model->pager;
		echo view('template/header', $data);
		echo view('page/all_blogs');
		echo view('template/footer');
	}

	function showme($page = 'home'){
		if(!is_file(APPPATH.'/Views/page/'.$page.'.php')){
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		echo view('template/header');
		echo view('page/'.$page);
		echo view('template/footer');
	}
}
