@extends("layouts.MoldePage")

@section('contenido')
	<style>
		.header {
			display: none;
		}
	</style>
	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="gallerylogo text-center">
		<img data-tilt src="logos/buzoshead.png">
	</div>

	<div class="productsgrid row">
		@foreach ($buzos as $buzo)
		<article class="products text-center col-md-4">
			<img src="/storage/{{$buzo->fotopath}}">
			<h3 >$350</h3>
			<button type="button" class="btn btn-info">COMPRAR</button>
		</article>
		@endforeach
	</div>

	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="text text-center"><a href="productos">VOLVER</a></div>
	<div class="spacer"></div>
	<div class="spacer"></div>
@endsection

