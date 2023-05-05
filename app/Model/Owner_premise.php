<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner_premise extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable  = ['id', 'number_room', 'Full_name', 'passport_details', 'phone_number'];
}