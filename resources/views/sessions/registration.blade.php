@extends ('layouts.master')

@section ('content')

  <h2>Registration</h2>

  <form method="post" action="/register">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input id="email" class="form-control" name="email"></input>
      </div>

      <div class="form-group">
        <label for="password">Pasword:</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>

      <div class="form-group">
        <label for="password_confirmation">Pasword Confirmation:</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>

      @include('layouts.errors')

</form>

@endsection
