<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'tbluser';  // Check your database table name
    protected $fillable = ['username', 'password', 'gender'];
    
}
