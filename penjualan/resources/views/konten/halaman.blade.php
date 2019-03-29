@extends('layout.layout')

@section('title',$title)

@section('sidebar')
@parent
@endsection

@section('content')
<p>{{$konten}}</p>
@stop