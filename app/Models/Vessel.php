<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vessel extends Model
{

	public $table = 'vessels';

    protected $fillable = [
    	'name',
    	'imo_number'
    ];

    protected $hidden = [
    	'created_at',
    	'updated_at'
    ];

}
