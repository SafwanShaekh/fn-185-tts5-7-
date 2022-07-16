<!DOCTYPE html>
<html>
<body>

    <?php
        $txt = "Hello world!";
        $x = 5;
        $y = 10.5;

        echo $txt;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;

        //Concatenation in php        
            $txt = "Php is a server side scripting language";
            echo "Point to remember:  " . $txt . "!";  
            
        
        /*
            php variable scope
            1)Global
            2)Local
            3)Static            
        */

        
        $x = 5; // global scope
        
        function myTest() {
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
        } 
        myTest();

        echo "<p>Variable x outside function is: $x</p>";


        
        function Test() {
        static $x = 0;
        echo $x;
        $x++;
        }
        Test();
        Test();
        Test();

    ?>

</body>
</html>