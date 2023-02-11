<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    public $timestamps = false;

    public function properties(){
        return $this->hasMany(Property::class);
    }

    public function addedBy(){
        return $this->belongsTo(Admin::class);
    }
}
