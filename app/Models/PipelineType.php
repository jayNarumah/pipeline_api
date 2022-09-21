<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PipelineType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    /**
     * Get all of the pipelines for the PipelineType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pipelines(): HasMany
    {
        return $this->hasMany(Pipeline::class);
    }
}
