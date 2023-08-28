<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    use HasFactory;
    protected $fillable = ['officer_name'];
    /**
     * The roles that belong to the Officer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
   /**
    * Get all of the customers for the Officer
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function customers()
   {
       return $this->hasMany(Customer::class, 'officer_id', 'id');
   }
}
