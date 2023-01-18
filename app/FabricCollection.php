<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FabricCollection extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
    ];

    public function fabrics(): BelongsToMany
    {
        return $this->belongsToMany(Fabric::class, 'fabrics_collections');
    }
}
