<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\Checkout;
use Auth;
class camps extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = ['title', 'price'];

    public function getIsRegisteredAttribute()
    {
        if (!Auth::check()){
            return false;
        }
        return Checkout::whereCampId($this->id)->whereUserId(Auth::id())->exists();
    }
}
