<?php
namespace App\Repositories;

use App\Model\Type;

class Tipo extends BaseRepository{
	
	public function __construct(){
		$this->model =  new Type;
	}
}