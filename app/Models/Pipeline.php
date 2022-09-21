<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pipeline extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'pipeline_type_id',
        'name',
        'size',
        'start_lat',
        'start_long',
        'end_lat',
        'end_long',
    ];

    protected $casts = [
        'company_id' => 'integer',
        'pipeline_type_id' => 'integer',
        // 'size' => 'decimal',
        // 'start_lat' => 'decimal',
        // 'start_long' => 'decimal',
        // 'end_lat' => 'decimal',
        // 'end_long' => 'decimal',
    ];

    /**
     * Get the company that owns the Pipeline
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()//: BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get all of the pipelineTypes for the Pipeline
     *
     * @return \Illuminate\Database\Eloquent\Relations\BeLongsTo
     */
    public function pipelineType()//: beLongsTo
    {
        return $this->beLongsTo(pipelineType::class);
    }

    /**
     * Get all of the pipelineRoutes for the Pipeline
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pipelineRoutes()
    {
        return $this->hasMany(PipelineRoute::class);
    }

}
