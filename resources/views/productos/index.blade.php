@extends('layouts.master')

@section('content')

<div class="row">
    @foreach( $arrayProductos as $producto )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

        <a href="{{ url('/productos/show/' . $producto->id ) }}">
            @if(isset($producto->imagen))
                <img src="{{ $producto->imagen }}" style="height:200px"/>
            @else
                <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
            @endif

            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{ $producto->nombre }}
            </h4>
        </a>

    </div>
    @endforeach

</div>

@stop