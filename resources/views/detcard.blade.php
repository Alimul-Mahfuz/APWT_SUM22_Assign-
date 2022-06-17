@extends('unav')
@section('content')
<div class="card">
    <div class="card-header">
      User Details
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$sdet->name}}</h5>
      <p class="card-text">{{$sdet->email}}</p>
    </div>
  </div>
@endsection