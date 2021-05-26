<?php namespace App\Models;

use CodeIgniter\Model;

class blogmodel extends Model{
    protected $table = 'post';
    protected $primKey = 'id';
    protected $allowedFields = ['title', 'description', 'image', 'tag'];

    public function getPost($id = null){
    if(!$id){
      return $this->findAll();
    }
    return $this->asArray()
                ->where(['id' => $id])
                ->first();
  }
}
