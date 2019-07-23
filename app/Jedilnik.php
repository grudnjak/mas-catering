<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jedilnik extends Model
{
    //table name
    protected $table ='jedilniki';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
    
    public function user(){
        return $this -> belongsTo('App\User');
    }
}
