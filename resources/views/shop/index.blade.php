@extends('layouts.default')

@section('content')

	<div class="bg-white">
		<div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
			<h2 class="sr-only">Products</h2>
			<div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

				@foreach ($products as $product)
				
					<a href="{{ route('shop.show', $product->id) }}" class="group">
						<div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
						
							@if($product->image_path)
								<img src="{{ asset('storage/'.$product->image_path) }}" alt="{{ $product->name }}" class="w-full h-full object-center object-cover group-hover:opacity-75">
							@endif

						</div>
						<h3 class="mt-4 text-sm text-gray-700">{{ $product->name }}</h3>
						<p class="mt-1 text-sm font-medium text-gray-900">${{ formatnumber($product->price) }}</p>
					</a>
				
				@endforeach

			</div>
		</div>
	</div>

@stop
