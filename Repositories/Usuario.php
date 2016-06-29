<?php
namespace App\Repositories;

use App\Model\User;

class Usuario extends BaseRepository{
	
	public function __construct(){
		$this->model =  new User;
	}

	
}