@extends('Layouts.unav')

@section('content')
<div class="card">
    <div class="card-header">
      Details
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$sdet->name}}</h5>
      <p class="card-text">{{$sdet->email}}</p>
      <a href="{{route('dashboard')}}" class="btn btn-primary">Back</a>
    </div>
  </div>
    
@endsection