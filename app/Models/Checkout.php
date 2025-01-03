<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Relations\Belongsto;
class Checkout extends Model
{
    use HasFactory,softDeletes;
    protected $fillable = ['user_id', 'camp_id', 'card_number', 'expired', 'cvc', 'is_paid' ];

    public function setExpiredAttribute($value)
    {
        $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    }

    /**
     * Get the camps that owns the Checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Camp(): BelongsTo
    {
        return $this->belongsTo(camps::class);
    }

    /**
     * Get the user that owns the Checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, );
    }
}
