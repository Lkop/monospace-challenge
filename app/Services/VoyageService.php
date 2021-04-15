<?php

namespace App\Services;

use App\Repositories\VoyageRepository;
use App\Repositories\VesselRepository;
use App\Models\Vessel;

class VoyageService {

    protected $voyage_repo;
    protected $vessel_repo;

    public function __construct(VoyageRepository $voyage_repo, VesselRepository $vessel_repo) {
        $this->voyage_repo = $voyage_repo;
        $this->vessel_repo = $vessel_repo;
    }

    public function getAll() {
        return $this->voyage_repo->getAll();
    }

    public function addVoyage($data) {

        $vessel = $this->vessel_repo->getById($data['vessel_id']);

        $data['code'] = $vessel['name']."-".$data['start'];
        $data['status'] = "pending";
        $data['profit'] = $data['revenues'] - $data['expenses'];

        return $this->voyage_repo->save($data);
    }

    public function updateVoyage($id, $data) {

        $data['code'] = "a"."-".$data['start'];
        $data['status'] = "pending";
        $data['profit'] = $data['revenues'] - $data['expenses'];

        return $this->voyage_repo->update($id, $data);
    }

}