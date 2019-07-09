<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Blog Posts</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="container">
    <h1>
        <?php echo $day." の日記一覧" ?>
        <a href="{{ url('/') }}" class="header-menu">Back</a>
    </h1>
    <ul>
      {{--
      @foreach ($posts as $post)
      <li>
          <a href="">{{ $post->title }}</a>
          <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a>
      </li>
      @endforeach
      --}}
      @forelse ($posts as $post)
      <li>
          <a href="">{{ $post->title }}</a>
          <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a>
      </li>  
      @empty
      <li>No posts yet</li>
      @endforelse
    </ul>
  </div>
</body>
</html>