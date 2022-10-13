<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PipelineRoute extends Model
{
    use HasFactory;
    protected $fillable = [
        'pipeline_id',
        'lat',
        'long',
    ];
    protected $casts = [
        'pipeline_id' => 'integer',
        // 'lat' => 'decimal',
        // 'long' => 'decimal',
    ];

    /**
     * Get the pipeline that owns the PipelineRoute
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pipeline()//: BelongsTo
    {
        return $this->belongsTo(pipeline::class, 'pipeline_id');
    }
}