<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title><?php echo $post->title."の詳細" ?></title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="container">
    <h1>
        <a href="{{ url('/calender/posts', $post->designated_at) }}" class="header-menu">diary list</a>
        <br>
        <a href="{{ url('/logout') }}" class="header-menu">logout</a>
        <br>
        {{ $post->title }}
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
    {{--<p>画像：<img src ="/storage/app/{!! nl2br(e($post->img_url)) !!}"></p>--}}
    <p>画像：<img src ="/{{ $image_url }}"></p>
    {{--<p>画像：{!! nl2br(e($post->img_url)) !!}</p>--}}
  </div>
</body>
</html>