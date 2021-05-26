<?php namespace App\Controllers;

use App\Models\blogmodel;

class Blog extends BaseController
{

	function create(){
		helper('form');
		$model= new blogmodel();

		if(! $this->validate([
			'title'=>'required|min_length[3]|max_length[255]',
			'description'=>'required|min_length[20]|max_length[500]',
			'image' => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
            ],
		])){
		echo view('template/header');
		echo view('blog/create');
		echo view('template/footer');
		} else{
			$image = $this->request->getFile('image');
			$imageName = $image->getRandomName();
			$image->move(ROOTPATH.'public/upload',$imageName);
			$model->save(
				[
					'title' => $this->request->getVar('title'),
					'description' => $this->request->getVar('description'),
					'image' => $imageName,
					'tag' => $this->request->getVar('tag'),
				]
			);

			$session = \Config\Services::session();
			$session->setFlashdata('success','You just posted a new blog!');
		return redirect()->to('/');
	}
}
}
