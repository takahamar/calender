<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title><?php echo $post->title." の編集" ?></title>
  <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
  <div class="container">
    <h1>
        <a href="{{ action('PostsController@list', [$post->user_id, $post->designated_at]) }}" class="header-menu">diary list</a><br>
        <a href="{{ url('/logout') }}" class="header-menu">logout</a><br>
        <?php echo $post->designated_at." の"."「".$post->title."」"." の編集" ?>
    </h1>
      
    <form method="POST" action="{{ url('/calender/posts/detail', $post) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('patch') }}
    <p>
        <input type="hidden" name="designated_at" value="{{ $post->designated_at }}">
        @if ($errors->has('designated_at'))
        <span class="error">{{ $errors->first('designated_at') }}</span>
        @endif
    </p>
    <p>
        <input type="text" name="title" placeholder="enter title" value="{{ old('title', $post->title) }}">
        @if ($errors->has('title'))
        <span class="error">{{ $errors->first('title') }}</span>
        @endif
    </p>
    <p>
        <textarea name="body" placeholder="enter body">{{ old('body', $post->body) }}</textarea>
        @if ($errors->has('body'))
        <span class="error">{{ $errors->first('body') }}</span>
        @endif
    </p>
    
    <p>
        <input type="text" value="{{ old('image_url', $image_url) }}">
        <input type="file" name="image_url"> 
    </p>
    
    <p>
        <input type="submit" value="Update">
    </p>
    </form>
  </div>
</body>

</html>