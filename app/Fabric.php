<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function collections(): BelongsToMany
    {
        return $this->belongsToMany(FabricCollection::class, 'fabrics_collections');
    }
}
