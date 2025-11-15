<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Szerelo extends Model
{
    protected $table = 'szerelos';

    protected $primaryKey = 'az';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nev',
        'kezdev',
    ];

    public function munkalapok()
    {
        
        return $this->hasMany(Munkalap::class, 'szereloaz', 'az');
    }
}
