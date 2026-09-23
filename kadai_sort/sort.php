<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP学習</title>
</head>
<body>
    <p>
        <?php
        function sort_2way($array, $order){
            //昇順か降順か決める（$orderのT/F）//ソートする関数を探してきて書く
            if ($order){//「入ってないならfalse」だから、要件と違う可能性ある？ダメそうなら===trueにして
                echo '昇順にソートします。<br>';
                sort($array);
            }else{
                echo '降順にソートします。<br>';
                rsort($array);
            }
            foreach ($array as $value){
                echo "{$value}<br>";
            }

            //昇順にソートします。<br>で、改行しながら1つずつ出してく感じで
        }
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];
        sort_2way($nums,true);
        sort_2way($nums,false);
        ?>
    </p>
</body>
</html>