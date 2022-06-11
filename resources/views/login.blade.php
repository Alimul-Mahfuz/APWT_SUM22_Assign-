@extends('Layouts.navigation')
@section('content')
    

<form method="post" action="">
  @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    @error('email')
        <span class="text-danger">{{$message}}</span>
    @enderror
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="pass" value="{{old('pass')}}" class="form-control" id="exampleInputPassword1">
    </div>
    @error('pass')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
  @endsection