<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = ['name','user_id', 'description','status'];
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
