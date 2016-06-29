<?php
namespace App\Repositories;

class BaseRepository{
	
	public $model;

	public function getAll(){
		return $this->model->paginate(6);
	}

	public function getById($id){
		return $this->model->find($id);
	}

	public function delete($id){
		return $this->model->destroy($id);
	}

	public function create($array){
		return $this->model->create($array);
	}

	public function update($id, $array){
		return $this->model->where(['id'	=>	$id])->get()->first()
					->fill($array)->save();
	}

	public function toArrayIds( $list, $field = 'id' ) {
        $ids = array();
        foreach($list as $row) {
            $item = (object) $row;
            $ids[] = $item->{$field};
        }
        return $ids;
    }

    public function toArrayNames( $list, $field = 'name' ){
    	$names = array();
        foreach($list as $row) {
            $item = (object) $row;
            $names[] = $item->{$field};
        }
        return $names;
    }

}