<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_division extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable  = ['id', 'Name', 'standard_square'];
}