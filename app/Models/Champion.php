<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Champion extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "id",
        "avatar",
        "name",
        "pv",
        "pvMax",
        "mana",
        "manaMax",
        "isInvincible",
        "isDead",
        "class"
    ];

    public static $VISIBLE = [
        "avatar",
        "name",
        "pv",
        "pvMax",
        "mana",
        "manaMax",
        "isInvincible",
        "isDead",
        "class"

    ];

    public $timestamps = false;

    protected $with = ['capacities'];

    public function capacities(): HasMany
    {
        return $this->hasMany(Capacities::class, 'champions_id');
    }
}
