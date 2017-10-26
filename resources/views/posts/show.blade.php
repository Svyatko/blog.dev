@extends ('layouts.master')

@section ('content')

  <div class="blog-post">
    <hr>
    <h2>{{$post->title}}</h2>
    <p class="blog-post-meta">
      
    </p>
    <hr>
    <p>{{$post->body}}</p>
    <hr>
  </div>

  <div class="comments">
    <ul class="list-group">

      @foreach($post->comments as $comment)
          <li class="list-group-item">
            <strong>
              {{ $comment->created_at->diffForHumans() }}: &nbsp;
            </strong>
            {{ $comment->body }}
          </li>

        @endforeach
      </ul>

  </div>
  <hr>
  <div class="card">
    <div class="card-block">

      <form action="/posts/{{ $post->id }}/comments" method="post">

        {{ csrf_field() }}

        <div class="form-group">
          <textarea name="body" placeholder="Your comment will be here." class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Comment</button>
        </div>
      </form>

    </div>

  </div>

@endsection
