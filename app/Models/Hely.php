<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hely extends Model
{
    protected $table = 'helys';

    protected $primaryKey = 'az';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false; 

    protected $fillable = [
        'telepules',
        'utca',
    ];

    public function munkalapok()
    {
        
        return $this->hasMany(Munkalap::class, 'helyaz', 'az');
    }
}
