<?php

namespace App\Http\Models\Customer;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
	//protected $fillable = ['first_name','last_name','address','email','age','gender','phone','updated_at','created_at'];
	protected $guarded = [];
	
	public static function getCustomers($request){
	
	//$request->date_visit_from = '2020-01-22';
	
	
		$customers = Customer::select('*'); 
	
		if($request->date_visit_from){
		
			$customers->where('last_visit','>',$request->date_visit_from);
		}
		
		if($request->date_visit_to){
			$customers->where('last_visit','<',$request->date_visit_to); 
		}
		 
			
		$customers = $customers->paginate(2);
		$i=0; 
		foreach($customers as $customer){
			 $visits = $customer->visitsCustomerToRestaurant;
			if($request->date_visit_from){
				$visits = $customer->visitsCustomerToRestaurant->where('date_of_visit','>',$request->date_visit_from);
			}
			if($request->date_visit_to){
				$visits = $customer->visitsCustomerToRestaurant->where('date_of_visit','<',$request->date_visit_to);
			}
			 $customers[$i]->visitsCustomerToRestaurant = $visits;
			$i++;
		}

		return $customers;

	}

	public static function getCustomer($id){
		
	}
	
	public static function updateCustomer($request, $id){
		
	}
	
	public static function createCustomer($request){
		
	}
	
	public function visitsCustomerToRestaurant(){
		return $this->hasMany('App\Http\Models\Customer\CustomerToRestaurant','customer_id');
	}
	
}
