<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model {

	protected $table="category";
    protected $guarded = [];
    protected $primaryKey = 'id_category'; 

}
