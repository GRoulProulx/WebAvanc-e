<?php
namespace App\Models;
use App\Models\CRUD;

class Location extends CRUD{

    protected $table = "locationplace";
    protected $primaryKey = "id";
    protected $fillable = ['locationplace'];
}