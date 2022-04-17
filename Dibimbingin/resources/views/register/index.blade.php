@extends('layouts.main')

@section('container')


<main class="form-registration  ">
    <form action="/register" method="POST">
      @csrf
      <img class="mb-4" src="dibimbingin 3.png" alt="" height="100">
      
      <div class="form-floating">
        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" 
        id="name" placeholder="Name" required value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
        id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>
      
      <div class="form-floating">
        <input type="text" name="phonenumber" class="form-control @error('phonenumber') is-invalid @enderror" 
        id="phonenumber" placeholder="Phone Number" required value="{{ old('phonenumber') }}">
        <label for="phonenumber">Phone Number</label>
        @error('phonenumber')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>
      
      <div class="form-floating">
        <input type="text" name="school" class="form-control @error('school') is-invalid @enderror" 
        id="school" placeholder="School" required value="{{ old('school') }}">
        <label for="school">School Name</label>
        @error('school')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"
         id="password" placeholder="Password" required value="{{ old('password') }}">
        <label for="password">Password</label>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <small class= "d-block text-center mt-3"> Already Registered? <a href="/login"> Login</a></small>
    </form>
  </main>

@endsection