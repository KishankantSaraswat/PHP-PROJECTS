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
            public $weight;
            public function __construct($name,$color,$weight){
                $this->name = $name;
                $this->color = $color;
                $this->weight = $weight;
            }
            public function intro()
            {
                echo "this is {$this->name},color is {$this->color} weight is {$this->weight}";
            }
        }
        $cherry1 = new cherry ("cherry", "red","20");
        $cherry1->intro();
        
        ?>
    </body>
</html>