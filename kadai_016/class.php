<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function __construct(string $name, int $price) {
                $this->price = $price;
                $this->name = $name;
            }

            public function getPrice() {
                return $this->price;
            }
        }

        $food = new Food('potato', 250);
        print_r($food);

        class Animal {
            public $name;
            public $height;
            public $weight;

            public function __construct(string $name, int $height, int $weight) {
                $this->height = $height;
                $this->name = $name;
                $this->weight = $weight;
            }

            public function getHeight() {
                return $this->height;
            }
        }

        $animal = new Animal('dog', 60, 5000);
        print_r($animal);

        echo "<br>Price of food: " . $food->getPrice();
        echo "<br>Height of animal: " . $animal->getHeight();
        ?>
    </p>
</body>

</html>
