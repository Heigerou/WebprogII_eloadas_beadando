<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Munkalap extends Model
{
    protected $table = 'munkalaps';

    
    protected $primaryKey = 'az';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'bedatum',
        'javdatum',
        'helyaz',
        'szereloaz',
        'munkaora',
        'anyagar',
    ];

   
    public function szerelo()
    {
       
        return $this->belongsTo(Szerelo::class, 'szereloaz', 'az');
    }

   
    public function hely()
    {
       
        return $this->belongsTo(Hely::class, 'helyaz', 'az');
    }
}
