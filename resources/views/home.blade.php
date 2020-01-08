@extends('layouts.app')

@section('title', 'Home')
@section('content')

<hr>
  @foreach($content as $c)
 
  @if( app()->getLocale() == 'en')
    <p><a name="{{ $c->name}}"></a></p>
        <!-- <h3>{{ $c->name }}</h3> -->
        <p>{!! $c->content !!}</p>  
      @else
      <p><a name="{{ $c->name_id}}"></a></p>
        <!-- <h3>{{ $c->name }}</h3><hr>c -->
        <p>{!! $c->content_id !!}</p>  
    @endif
    <br>    
  @endforeach
  <p><a name="section"></a></p>

@endsection


