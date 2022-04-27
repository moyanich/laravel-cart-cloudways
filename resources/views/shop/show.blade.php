@extends('layouts.default')

@section('content')

<div class="grid sm:grid-cols-2 gap-2 pt-12 sm:pt-20 mx-auto w-4/5">
	<div class="mx-auto mr-4">
		<img 
		src="{{ asset('storage/'.$product->image_path) }}" 
		alt="{{ $product->name }}">
		</div>

	<div>
		<h1 class="text-4xl text-black font-bold pb-4">
			{{ $product->name }}
		</h1>

		<p class="text-3xl text-black pb-8">
			${{ formatnumber($product->price) }}
		</p>
		
		<p class="font-bold text-l text-black pb-8">
			Shipping: <span class="text-red-500">${{ formatnumber($product->shipping_cost) }}</span>
		</p>
		
		<div class="w-full pb-4">
			<h2 class="font-bold text-xl pb-2">Details</h2>
			<p class="font-thin text-s text-black pb-4">
				{{ $product->details }}
			</p>
			<h2 class="font-bold text-xl pb-2">Description</h2>
			<p class="font-thin text-s text-black pb-4">
				{{ $product->description }}
			</p>
		</div>
		
		<a 
			href="{{-- route('add.to.cart', $product->id) --}}"
			class="px-8 py-4 text-md text-white bg-blue-600 rounded-md w-full" 
			role="button" 
			aria-pressed="true">
			Add To Cart
		</a>

	

		
	</div>

@stop