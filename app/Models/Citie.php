<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Citie extends Model
{
    use HasFactory, SoftDeletes , Notifiable;

    protected $table = 'cities';

    public $timestamp = true;

    protected $date = [
        'deleted_at'
    ];
    

    protected $fillable = [
        'id',
        'cod',
        'name',
    ];
    public function client(){

        return $this->hasMany('App\Client');
       
    }
}
