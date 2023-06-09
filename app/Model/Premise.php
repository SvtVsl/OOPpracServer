<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premise extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable  = ['id', 'number_premies', 'square', 'id_department', 'type_premises', 'number_seats' ];
}
