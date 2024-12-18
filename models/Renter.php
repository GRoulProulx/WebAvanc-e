<?php
namespace App\Models;
use App\Models\CRUD;

class Renter extends CRUD{

    protected $table = "renter";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'address',  'city', 'zipcode', 'locationtypeid'];
}