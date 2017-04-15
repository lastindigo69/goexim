<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class currency extends Model {

	protected $table="currency";
    protected $guarded = [];
    protected $primaryKey = 'id_currency';  

}
