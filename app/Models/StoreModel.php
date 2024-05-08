<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreModel extends Model
{
    use HasFactory;

     /**
     * table
     *
     * @var string
     */
    protected $table = 'stores';

    /**
     * timestamp option
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];
}
