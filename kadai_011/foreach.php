<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
     <?php
       // 連想配列に値を代入する
       $product_data = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];

       foreach ($product_data as $key => $value) {
        echo "{$key} : {$value}<br>";
      }
       ?>
          </p>
             <p>
     <?php
       // 連想配列に値を代入する
       $personal_data = ['id' => '1', '名前' => '侍太郎', '年齢' => '30'];

       foreach ($personal_data as $key => $value) {
        echo "{$key} : {$value}<br>";
      }
       ?>
          </p>
</body>

</html>