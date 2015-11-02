@extends('app')

@section('content')

	@foreach($data as $artikel)
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<div class="panel">
    	<div class="heading">
        	<div class="icon mif-file-text"></div>
        	<div class="title">{{ $artikel->judul }}</div>
    	</div>
    	<div class="content">
    		{{ $artikel->isi }}

    		<a href="{{ $artikel->slug }}">Read more</a>
    		<br><br>

			<div class="place-right">

			@if(Auth::check())
				<span class="mif-mail"></span>
				<a href="{{ url('email/'.$artikel->slug) }}">
					Send Me E-mail
				</a>
			@endif


				&nbsp
				<span class="mif-file-pdf"></span>
				<a target="_blank" href="{{ url('pdf/'.$artikel->slug) }}">
					View PDF
				</a>
		
				<span class="mif-calendar"></span>
				{{ date_format(date_create($artikel->created_at),"D, d M Y H:i:s") }}
				<span class="mif-user"></span>
				{{ App\User::find($artikel->idpengguna)['name'] }}
			</div>
			<br>	
		</div>
	</div>
	@endforeach

	<hr>
	<span class="place-right">
	{!! $data->render() !!}
	</span>


@endsection