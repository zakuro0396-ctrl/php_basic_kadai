<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    $nums = array(15,4,18,23,10);

    function sort_2way($array,$order) {
      if ($order){
        echo "昇順にソートします。<br>";
        sort($array);
      }else {
      echo "降順にソートします。<br>";
       rsort($array);
    }
  
    foreach($array as $nums){ 
      echo $nums . '<br>';
    }
  }
  sort_2way($nums,true);
  sort_2way($nums,false);

    ?>
  </p>
</body>
</html>