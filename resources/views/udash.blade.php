@extends('Layouts.unav')
@section('content')
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($slist as $item)
        <tr>
        <td>{{$item->id}}</td>
        <td><a href="{{route('viewdet',['id'=>$item->id])}}">{{$item->name}}</a></td>
        <td>{{$item->email}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection