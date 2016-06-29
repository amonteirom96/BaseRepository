<?php
namespace App\Repositories;

use App\Model\Property;

class Imovel extends BaseRepository{
	
	public function __construct(){
		$this->model =  new Property;
	}
	
	public function getPrices(){
		foreach(Property::all() as $price){
			$prices[] = $price->price;
		}
		return $prices;
	}

	public function getSearch($array){
		return Property::where($array)
				->paginate(6);
	}

	public function getUltimProperty(){
		return Property::orderBy('id', 'desc')->paginate(6);
	}

	public function getParentProperties($neighborhood, $type, $id){
		return Property::where(['neighborhood_id'	=>	$neighborhood,	'type_id'	=>	$type])
				->where('id',	'!=',	$id)
				->paginate(3);
	}
}