<?php
namespace App\Repositories;

use App\Model\Neighborhood;

class Bairro extends BaseRepository{
	
	public function __construct(){
		$this->model =  new Neighborhood;
	}
}