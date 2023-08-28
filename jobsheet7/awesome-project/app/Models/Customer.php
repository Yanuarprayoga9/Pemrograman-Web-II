<?php

namespace App\Models;

use App\Models\Officer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'officer_id'
    ];
    /**
     * Get the user that owns the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Officer()
    {
        return $this->belongsTo(Officer::class, 'officer_id', 'id');
    }

}
