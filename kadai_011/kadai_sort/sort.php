<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function number_sort($array, $order){
echo '降順にソートします。<br>';
if ($order) {
                echo '昇順にソートします。<br>';
                sort($array);
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
            }
            foreach($array as $element) {
               echo $element . '<br>';
            }
        }
        // ソートする配列を宣言
$nums = [15, 4, 18, 23, 10 ];
        // sort_2wayを呼び出しましょう。
number_sort ($nums, TRUE);
number_sort ($nums, false);
        ?>
    </p>
</body>

</html>