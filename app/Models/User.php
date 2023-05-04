<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model 
{
public $timestamps = false; 
  
protected $primaryKey = 'teacher_id';  
  
protected $table = 'tblteacher'; 
  
protected $fillable = [ 
    'teacher_id', 'lastname', 'firstname', 'middlename', 'bday', 'age' 
]; 
}
