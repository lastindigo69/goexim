<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model {

	protected $table="supplier";
    protected $guarded = [];
    protected $primaryKey = 'id_supplier'; 
}
