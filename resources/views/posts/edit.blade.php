<pre>
<?php
  if(isset($_POST['form1'])) {
      $id = $_POST['form1'];
      echo $id;
  }
  
?>
</pre>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>{{ $date->yearMonth }}</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="container">
    <h1>
        <a href="{{ url('/') }}">Back</a><br>
        {{ $date->yearMonth}}
    </h1>
    <p>{!! nl2br(e($date->yearMonth)) !!}</p>
  </div>
</body>
</html>