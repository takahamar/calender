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
  <title><?php echo $date."の日記投稿" ?></title>
  <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
  <div class="container">
    <h1>
        <a href="{{ url('/') }}" class="header-menu">Back</a><br>
        <?php echo $date." の日記投稿" ?>
    </h1>
      
    
    <form method="POST" action="{{ action('PostsController@store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
    <p>
        <input type="hidden" name="designated_at" value="{{ $date }}">
        @if ($errors->has('designated_at'))
        <span class="error">{{ $errors->first('designated_at') }}</span>
        @endif
    </p>
    <p>
        <input type="text" name="title" placeholder="enter title" value="{{ old('title') }}">
        @if ($errors->has('title'))
        <span class="error">{{ $errors->first('title') }}</span>
        @endif
    </p>
    <p>
        <textarea name="body" placeholder="enter body">{{ old('body') }}</textarea>
        @if ($errors->has('body'))
        <span class="error">{{ $errors->first('body') }}</span>
        @endif
    </p>
    
    <p>
        <input type="file" name="image_url"> 
    </p>
    
    <p>
        <input type="submit" value="Add">
    </p>
    </form>
  </div>
</body>

</html>