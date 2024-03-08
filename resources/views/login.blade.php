<!-- TIP: ('folder/layout based on the folder and name') -->
@extends('layout')

<!-- Pass the title to layout -->
@section('title', 'Login')
<!-- Pass the content to layout -->
@section('content')

<!-- Copied from bootstrap -->
<div class="container">
  <!-- TIP: Learn bootstrap, Some of the unknown class are from bootstrap -->
  <div class="mt-5">
    @if ($errors->any())
      <div class="col-12">
        <!-- This line is for leaving the textbox blank -->
        @foreach($errors->all() as $error)
          <div class="alert alert-danger">{{$error}}</div>
        @endforeach  
      </div>
    @endif
    
    <!-- This line is for wrong details -->
    @if(session()->has('error'))
      <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    @if(session()->has('success'))
      <div class="alert alert-success">{{session('error')}}</div>
    @endif
  </div>
    <!-- Connect login to AuthManager @ Controller through web.php -->
    <!-- Specify as well the method which is post-->
    <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-3"  style="width: 500px">
      <!-- Put csrf to run the form -->
      @csrf
      <div class="mb-3">
            <label for="form-label" class="form-label">Email address</label>
            <!--The name will be used on AuthManager as well-->
            <input type="email" class="form-control" name="email">
           
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    
@endsection