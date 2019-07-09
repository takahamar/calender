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
  <title>Edit Post</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
  <div class="container">
    <h1>
        <a href="{{ url('/posts', $post->designated_at) }}" class="header-menu">Back</a><br>
        <?php echo $post->designated_at." の"."「".$post->title."」"." の編集" ?>
    </h1>
      
    <form method="POST" action="{{ url('/posts', $post->designated_at) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('patch') }}
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
        <input type="file" name="image_url"> 
    </p>
    
    <p>
        <input type="submit" value="Update">
    </p>
    </form>
  </div>
</body>

</html>