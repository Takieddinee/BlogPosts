@extends('layouts.app')

@section('content')
       <h1>{{$title}}</h1>
       <p>Laravel rocks i found it very easy hamdulah :D</p>
       @if(count($services)>0)
       <ul class="list-group">
            @foreach( $services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
       @endif
@endsection

