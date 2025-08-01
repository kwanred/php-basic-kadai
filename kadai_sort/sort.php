<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
     
        $order = '昇順';

        function sort_2way($order) {
          $nums = [15, 4, 18, 23, 10 ];
          if ($order === '昇順') {
            echo '昇順にソートします。<br>';
            sort ($nums);
            foreach ($nums as $array){
              echo $array . '<br>';
            }
          } else {
            echo '降順にソートします。<br>';
            rsort ($nums);
            foreach ($nums as $array){
              echo $array . '<br>';
            }
          }
        }

        sort_2way('昇順');

        sort_2way('降順');

        
        ?>
    </p>
</body>

</html>