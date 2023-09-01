<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Capacities extends Model
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
        "color",
        "cost_id",
        "type",
        "damage",
        "faIcon",
        "spellIcon",
        "description",
        "champions_id",
    ];

    public static $VISIBLE = [
        "name",
        "color",
        "type",
        "damage",
        "faIcon",
        "spellIcon",
        "description",
        "champions_id", // Modify column name to 'champion_id'
        "cost_id",
    ];

    public $timestamps = false;

    protected $with = ['cost'];

    public function cost(): BelongsTo
    {
        return $this->belongsTo(Costs::class);
    }
}
