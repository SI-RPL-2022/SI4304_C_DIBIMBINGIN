@extends('layouts.main')

@section('container')


<main class="form-signin">
    <form>
      <img class="mb-4" src="logokita.jpg" alt="" width="280" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <small class= "d-block text-center mt-3"> Not Registered? <a href="/register"> Register Now!</a></small>
    </form>
  </main>

@endsection