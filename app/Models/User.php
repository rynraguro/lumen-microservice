<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'tbluser';  // Ensure this matches your database table name
    protected $fillable = ['username', 'password', 'gender'];
    public $timestamps = false; // Disable timestamps
}
