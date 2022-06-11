@extends('Layouts.navigation')

@section('content')
<form action="" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" value="{{old('name')}}" id="name" name="name" placeholder="Enter name">
    </div>
    @error('name')
       <span class="text-danger">{{$message}}</span> 
    @enderror
    <br>
    {{-- <div class="form-group">
      <label for="id">ID</label>
      <input type="text" class="form-control" id="id" name="id" placeholder="xxx-xx-xx">
    </div>
    @error('id')
    <span class="text-danger">{{$message}}</span> 
    @enderror
    <br> --}}
    <div class="form-group">
      <label for="dob">Date of Birth</label>
      <input type="date" class="form-control" value="{{old('dob')}}" id="dob" name="dob" placeholder="Password">
    </div>
    @error('dob')
    <span class="text-danger">{{$message}}</span> 
    @enderror

    <br>
    <div class="form-group">
        <label for="mail">Email address</label>
        <input type="email" value="{{old('email')}}" class="form-control" name="email" id="mail" placeholder="Enter email">
        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
      </div>
    @error('email')
      <span class="text-danger">{{$message}}</span> 
    @enderror
      <br>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" value="{{old('phone')}}" class="form-control" id="phone" name="phone" placeholder="+880">
    </div>
    @error('phone')
    <span class="text-danger">{{$message}}</span> 
    @enderror
    <br>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="pass" value="{{old('pass')}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      @error('pass')
      <span class="text-danger">{{$message}}</span> 
      @enderror
      <br>
    <div class="form-group">
        <label for="confpass">Confirm Password</label>
        <input type="password" class="form-control" value="{{old('confpass')}}" id="confpass" name="confpass" placeholder="Confirm Password">
      </div>
      @error('confpass')
      <span class="text-danger">{{$message}}</span> 
      @enderror
      <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection