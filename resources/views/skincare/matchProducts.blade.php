@extends("layouts.master")


@section("title")
    Skincare Products
@endsection


@push("head")
    <!--<link href="/css/skincare.css" type="text/css rel="stylesheet">-->
@endpush


@section("content")
		@foreach($products as $ptype => $product) 
        	<h2>{{ $ptype }}</h2>
        	@foreach($product as $index => $item)
        		<h3>Brand : {{ $product[$index]->brand }}</h3>
        		<h3>Product : {{ $product[$index]->name }}</h3>
        		<h3>Where to buy : <a href="{{ $product[$index]->url }}" target="_blank">Link to website</a></h3>
        		<h3>Price : {{ $product[$index]->price }}</h3>
        		@foreach($product[$index]->skintype as $idx => $val) 
	        		<h3>Skin Type : {{ $val }}</h3>
				@endforeach
				<br>
        	@endforeach
        @endforeach
@endsection


@push("body")
	


@endpush