@extends("layouts.master")

@section("title")
    Find your skincare products
@endsection


@push("head")
    <!--<link href="/css/skincare.css" type="text/css rel="stylesheet">-->
@endpush


@section("content")
        <h1>Find your skincare products</h1>

		<form method="GET" action="/skincare/match-products">
			<span>Choose category</span>
			<select name="producttypes">
				<option value="cleansers">Cleansers</option>
				<option value="toners">Toners</option>
				<option value="moisturizers">Moisturizers</option>
				<option value="eyecreams">Eye Creams</option>
			</select>

			<span>*Select your skin type</span>
			<!--input type: radio-->
			<p>
				<input type="radio" id="dry" name="skintype" value="dry">
				<label for="dry">Dry</label>
			</p>
			<p>	
				<input type="radio" id="oily" name="skintype" value="oily">
				<label for="oily">Oily</label>
			</p>
			<p>	
				<input type="radio" id="combination" name="skintype" value="combination">
				<label for="combination">Combination</label>
			</p>
			<p>
				<input type="radio" id="normal" name="skintype" value="normal">
				<label for="normal">Normal</label>
			</p>

			<!--input type: number-->
			<p>
				<span>*Price Range (10~100) $</span>
				<input type="number" name="pricerange" min="10" max="100" value="50">
			</p>
			<p>
				<input type="submit" class="btn" value="Find one for me">
			</p>			

		</form>

     	
@endsection

