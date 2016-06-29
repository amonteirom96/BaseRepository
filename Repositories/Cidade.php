<?php
namespace App\Repositories;

use App\Model\City;

class Cidade extends BaseRepository{
	
	public function __construct(){
		$this->model =  new City;
	}
	
}