<?php

namespace App\Models;

use App\Models\Size;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Price extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    /*protected $casts=[
        'rates'=>'array'
    ];*/
    protected $casts = [
        'rates' => 'json'
    ];

    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class);
    }
}
