<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Roomtype extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'roomtypes';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['typecode','typename','defaultprice','extrabed'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function room()
    {
       return $this->hasMany('App\Models\Room');
    }
    public function roomrate()
    {
       return $this->hasMany('App\Models\Roomrate');
    }

    public function foods() {
        return $this->belongsToMany('App\Models\Food')->withTimestamps();
    }

    public function bathrooms() {
        return $this->belongsToMany('App\Models\Bathroom')->withTimestamps();
    }

    public function amenities() {
        return $this->belongsToMany('App\Models\Amenity')->withTimestamps();
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
    // public function getAvailableAttribute() {
    //     $total = DB::table('rooms')->where('status', 0)->count();
    //     return $total;
    // }
  
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
