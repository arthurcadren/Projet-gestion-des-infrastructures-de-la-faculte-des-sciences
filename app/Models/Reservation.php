<?php

namespace App\Models;

use App\Models\Spot;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    protected $dates=[
        'start',
        'end',
        'paid_at',
        'update_at'
    ];

    public function spot(): BelongsTo
    {
        return $this->belongsTo(Spot::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    } 

}
