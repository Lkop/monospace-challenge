<?php

namespace App\Repositories;

use App\Models\Vessel;

class VesselRepository {

	protected $vessel;

	public function __construct(Vessel $vessel) {
		$this->vessel = $vessel;
	}

	public function getById($id) {
		return $this->vessel->where('id', $id)->get();
	}
}