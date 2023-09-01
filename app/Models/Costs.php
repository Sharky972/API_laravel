<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Costs extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "id",
        "name",
        "value",
        "faIcon",
    ];

    public static $VISIBLE = [
        "name",
        "value",
        "faIcon",
    ];

    public function capacity(): HasOne
    {
        return $this->hasOne(Capacities::class);
    }
    public $timestamps = false;
}
