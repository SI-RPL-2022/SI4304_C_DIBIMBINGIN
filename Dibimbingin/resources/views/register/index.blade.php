@extends('layouts.main')

@section('container')


<main class="form-registration  ">
    <form>
      <img class="mb-4" src="logokita.jpg" alt="" width="280" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      
      <div class="form-floating">
        <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
        <label for="name">Name</label>
      </div>
     
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>
      
      <div class="form-floating">
        <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="Phone Number">
        <label for="phonenumber">Phone Number</label>
      </div>
      
      <div class="form-floating">
        <input type="text" name="school" class="form-control" id="school" placeholder="School">
        <label for="school">School Name</label>
      </div>

      <div class="form-floating">
        <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
        <label for="password">Password</label>
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