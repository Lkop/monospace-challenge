<?php

namespace App\Repositories;

use App\Models\Voyage;

class VoyageRepository {

	protected $voyage;

	public function __construct(Voyage $voyage) {
		$this->voyage = $voyage;
	}

	public function getAll() {
		return $this->voyage->get();
	}


	public function save($data) {

		$voyage = new Voyage();

		$voyage->vessel_id = $data['vessel_id'];
		$voyage->status = $data['status'];
		$voyage->code = $data['code'];
		$voyage->start = $data['start'];
		$voyage->end = $data['end'];
		$voyage->revenues = $data['revenues'];
		$voyage->expenses = $data['expenses'];
		$voyage->profit = $data['profit'];

		$voyage->save();

		return $voyage->fresh();
	}


	public function update($id, $data) {

		return DB::table('voyages')->where('id', $id)->update($data);
	}


}