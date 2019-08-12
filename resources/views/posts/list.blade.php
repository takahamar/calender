<?php
//class Date {
//public $date;
  if(isset($_GET['s_date'])) {
      $date = $_GET['s_date'];   
  }
//}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title><?php echo $day." の日記一覧" ?></title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="container">
    <h1>
        <form name="form_$date" method="POST" action="{{ url('/calender/posts/create', $day) }}">
            {{ csrf_field() }}
            <input name= "c_date" type="hidden" value="{{$day}}">   
             <a href="/calender/posts/create, $date" onClick="document.form_$date.submit(); return false;" class="header-menu">New Post</a>
        </form>
        <br>
        <a href="{{ url('/calender') }}" class="header-menu">Calendar</a>
        <br>
        <a href="{{ url('/') }}" class="header-menu">login</a>
        <?php echo $day." の日記一覧" ?>
    </h1>
    <ul>
      
      @forelse ($posts as $post)
      <li>
          <a href="{{ url('/calender/posts/detail', $post->id) }}" class="detail">{{ $post->title }}</a>
          <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a>
          <a href="#" class="del" data-id="{{ $post->id }}">[x]</a>
          <form method="post" action="{{ url('/calender/posts/detail', $post->id) }}" id="form_{{ $post->id }}">
              {{ csrf_field() }}
              {{ method_field('delete') }}
          </form>
      </li>  
      @empty
      <li>No posts yet</li>
      @endforelse
    </ul>
    <script src="/js/main.js"></script>
  </div>
</body>
</html>