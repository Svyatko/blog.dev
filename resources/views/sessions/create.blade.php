@extends ('layouts.master')

@section('content')

  <h1>Sign In</h1>

  <form action="/login" method="post">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Sign In</button>
    </div>
    <a href="/register">Registration</a>
    @include('layouts.errors')
  </form>



@endsection
