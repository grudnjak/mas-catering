<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class ContactUS extends Model
{
       //Primary key
       public $primaryKey = 'id';
       //Timestamps
       public $timestamps = true;
       
public $table = 'contactus';
public $fillable = ['name','email','date','steviloLjudi','vrsta','body'];
}