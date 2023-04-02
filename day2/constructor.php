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
            function set_name($name){
                $this->name=$name;
            }
            function get_name(){
                return $this->name;
            }
            function set_color($color){
                $this->color=$color;
            }
            function get_color(){
                return $this->color;
            }
        }
        $mango=new fruit("mango","yellow");
        echo $mango->get_name();
        echo "<br>";
        echo $mango->get_color();
        ?>
    </body>
</html>