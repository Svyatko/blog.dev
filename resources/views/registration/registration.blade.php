@extends ('layouts.master')

@section ('content')

  <h1>Guest's book</h1>

  <form action="/guestbook" method="post">
    <div class="form-group">
      <label for="name">Name: *</label>
      <input type="text" name="name" placeholder="Name" class="form-control">
    </div>

    <div class="form-group">
      <label for="name">Nick name: </label>
      <input type="text" name="nick_name" placeholder="Nick name" class="form-control">
    </div>

    <div class="form-group">
      <label for="name">Email: *</label>
      <input type="email" name="email" placeholder="Name" class="form-control">
    </div>

    <button type="button" class="btn btn-primary" name="button">Publish</button>
  </form>

@endsection
