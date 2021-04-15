<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VoyageService;


class VoyagesController extends Controller {

	protected $voyage_service;

    public function __construct(VoyageService $voyage_service) {
        $this->voyage_service = $voyage_service;
    }

	public function displayAll() {
		return $this->voyage_service->getAll();
	}

	public function createVoyage(Request $request) {
		$data = $request->validate([
	        'vessel_id' => 'required',
	        'start' => 'required',
	        'end' => 'required',
	        'revenues' => 'required',
	        'expenses' => 'required',
	    ]);


		$results = $this->voyage_service->addVoyage($data);
		
		if($results){
			return $results;
		}else{
			return ['success' => 0];
		}
	}

	public function updateVoyage(Request $request) {
		$data = $request->validate([
	        'vessel_id' => 'required',
	        'start' => 'required',
	        'end' => 'required',
	        'revenues' => 'required',
	        'expenses' => 'required',
	    ]);


		$results = $this->voyage_service->updateVoyage($id, $data);
		
		if($results){
			return $results;
		}else{
			return ['success' => 0];
		}
	}
}
