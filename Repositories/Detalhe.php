<?php
namespace App\Repositories;

use App\Model\Detail;

use App\Model\Property;

class Detalhe extends BaseRepository{
	
	public function __construct(){
		$this->model =  new Detail;
	}
}