@extends('layouts.app')
<style>
	.frame{
		height: 100%;
	}
</style>

@section('content')

  
	<iframe class='col-md-12 frame' src="http://map.google.com?q={{$adresse}}<&key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&output=embed">	
	</iframe>
		
@endsection