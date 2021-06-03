<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use HasFactory, SoftDeletes , Notifiable;


    protected $table = 'clients';

    public $timestamp = true;

    protected $date = [
        'deleted_at'
    ];
    

    protected $fillable = [
        'id',
        'cod',
        'name',
        'cities_id',
    ];

    public function citie(){

        return $this->belongsTo(Citie::class, 'cities_id', 'id');
       
    }
}
