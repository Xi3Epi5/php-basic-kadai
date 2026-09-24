<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
            class Food {
                private $name;
                private $price;
                public function show_price(){
                    echo $this->price . '<br>';
                }
                public function __construct(string $name, int $price){
                    $this->name = $name;
                    $this->price = $price;
                }
            }

            class Animal{
                private $name;
                private $height;
                private $weight;
                public function show_height(){
                    echo "{$this->height}<br>";
                }
                public function __construct(string $name, int $height, int $weight){//書き方合ってる？ 引数のどうやんの→もしかして()に入れるのでは→ぽいな
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
            }

            $food1 = new Food('potato', 250);
            $animal1 = new Animal('dog', 60, 5000);
            print_r($food1);
            print_r($animal1);
            $food1->show_price();//なんで呼び出せない？→どれのかを指定してないやんけ→これも->の先に出す
            $animal1->show_height();
        ?>
    </p>
</body>
</html>