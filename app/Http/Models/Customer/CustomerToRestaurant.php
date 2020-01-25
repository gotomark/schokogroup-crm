<?php

namespace App\Http\Models\Customer;

use Illuminate\Database\Eloquent\Model;

class CustomerToRestaurant extends Model
{
    protected $table = 'customer_to_restaurant';
	protected $guarded = [];
	
	  public function customer()
	  {
		return $this->belongsTo('App\Http\Models\Customer\Customer');
	  }
}
