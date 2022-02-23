@extends('layouts.main-layout')

@section('content')

<br/> <a href="{{route('postcards.create')}}" class="btn btn-primary">CREATE POSTCARD</a> <br/> <br/> 
<postcards-component></postcards-component>

@endsection


