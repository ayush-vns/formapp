<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class signup extends Model 
{
    protected $fillable=['id','name','username','email','password'];
    protected $table='signup';
    protected $primarykey='id';
}


