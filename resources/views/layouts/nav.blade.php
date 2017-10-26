<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="/">Home</a>
      <a class="nav-link" href="/posts/create">New post</a>

      @if(Auth::check())
        <a class="nav-link ml-auto" href="/">Hello, {{ Auth::user()->name }}</a>
        <a class="nav-link ml" href="/logout">Logout</a>
      @else
        <a class="nav-link ml-auto" href="/login">Sign In</a>
      @endif
    </nav>
  </div>
</div>
