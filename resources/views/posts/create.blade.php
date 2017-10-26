@extends ('layouts.master')

@section ('content')

  <form action="/posts" method="post">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Title: *</label>
      <input type="text" id="title" name="title" placeholder="title" class="form-control">
    </div>

    <div class="form-group">
      <label for="body">Body: *</label>
      <textarea type="text" id="body" name="body" placeholder="Type your body here" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Publish</button>
  </form>

@endsection
