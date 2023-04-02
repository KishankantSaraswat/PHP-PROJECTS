<html>
    <body>
        <?php
        class fruit{
            public $name;
            public $color;
            function __construct($name,$color){
                $this->name = $name;
                $this->color = $color;

            }
            public function intro(){
                echo "A {$this->name}is a fruit and color is {$this->color}";
            }
        }
        class cherry extends fruit{
            public function message(){
                echo "Is cheery a fruit or not?";
            }
        }
        $cherry1 = new cherry("cherry", "red");
        $cherry1->message();
        echo "<br>";
        $cherry1->intro();
        ?>
    </body>
</html>