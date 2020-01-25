@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	<table class="table">
	<thead>
	<tr>
	
	<th>
	Name
	</th>

	<th>
	Date visit
	</th>
	<th>
	</thead>
        @foreach($customers as $customer)
		<tr>
		<td>{{$customer->first_name}}</td>
		<td>@foreach($customer->visitsCustomerToRestaurant as $visit){{$visit->date_of_visit}}<br> @endforeach</td>
		</tr>
		@endforeach
	</table>
    </div>
</div>

@stop