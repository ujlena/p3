@extends("layouts.master")


@section("title")
    All Skincare Products
@endsection


@push("head")
    
@endpush

@section("content")
    <p class="pagetitle">See All Skincare</p>
    		@foreach($products as $ptype => $product) 
            	<h2>{{ $ptype }}</h2>
            	@foreach($product as $index => $item)
            		<h3>Brand : {{ $product[$index]->brand }}</h3>
            		<h3>Product : {{ $product[$index]->name }}</h3>
            		<h3>Where to buy : <a href="{{ $product[$index]->url }}" target="_blank">Link to website</a></h3>
            		<h3>Price : ${{ $product[$index]->price }}</h3>
            		<h3>Skin Type : 
                        @foreach($product[$index]->skintype as $idx => $val){{ $val }}
                        @endforeach
                    </h3>
    				
    				<br>
            	@endforeach
            @endforeach
@endsection


@push("body")
	


@endpush