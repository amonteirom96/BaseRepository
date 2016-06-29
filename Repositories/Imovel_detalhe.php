<?php
namespace App\Repositories;

use App\Model\Property_detail;

class Imovel_detalhe extends BaseRepository{
	
	public function __construct(){
		$this->model =  new Property_detail;
	}
}