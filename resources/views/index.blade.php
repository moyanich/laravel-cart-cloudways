
@extends('layouts.default')

@section('content')

	<div 
	class="grid grid-cols-1 m-auto w-full h-screen bg-dunes bg-cover bg-center"
	style="background-image: url('https://cdn.pixabay.com/photo/2019/02/10/15/09/clothes-3987460_1280.jpg')">
		<div class="flex text-gray-100">
			<div class="m-auto pb-16 sm:m-auto w-4/5 block text-center">
				<h1 class="sm:text-white text-3xl sm:text-5xl uppercase font-normal text-shadow-md">
					Shop Clothing
				</h1>
				
				<p class="pb-10 font-thin pt-6">
					Get items for the cheapest price
				</p>

				<a  
					href="{{ route('shop') }}"
					class="px-8 py-4 text-l uppercase text-white font-bold bg-blue-600 rounded-full w-full">
					Shop Now
				</a>
			</div>
		</div>
	</div>

@stop