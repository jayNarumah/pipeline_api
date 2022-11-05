<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'email',
        'color',
    ];

    /**
     * Get all of the pipelines for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pipelines()//: HasMany
    {
        return $this->hasMany(Pipeline::class);
    }

}