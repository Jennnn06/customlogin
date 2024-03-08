<!-- TIP: ('folder/layout based on the folder and name') -->
@extends('layout')

<!-- Pass the title to layout -->
@section('title', 'Registration')
<!-- Pass the content to layout -->
@section('content')

<!-- Copied from bootstrap -->
<div class="container">

    <!-- TIP: Learn bootstrap, Some of the unknown class are from bootstrap -->
    <div class="mt-5">
      @if ($errors->any())
        <div class="col-12">
          @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
          @endforeach  
        </div>
      @endif

      @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
      @endif

      @if(session()->has('success'))
        <div class="alert alert-success">{{session('error')}}</div>
      @endif
    </div>
    <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-3"  style="width: 500px">
        @csrf
        <div class="mb-3">
          <label class="form-label">Fullname</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="form-label" class="form-label">Email address</label>
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