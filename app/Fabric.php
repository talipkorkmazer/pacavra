<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fabric extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'images',
    ];


    public function categories(): BelongsTo
    {
        return $this->belongsTo(FabricCategory::class);
    }
}
