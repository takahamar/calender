<pre>
<?php
  // [ user.php ]
  if(isset($_POST['%d'])) {
      $id = $_POST['%d'];
      echo $id;
  }
  if(isset($_GET['name'])) {
      $name = $_GET['name'];
      print("$name<br>\n");
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
    <h1>{{ $date->yearMonth}}</h1>
    <h1>{{ $date->yearMonth}}</h1>
    <p>{!! nl2br(e($date->yearMonth)) !!}</p>
  </div>
</body>
</html>