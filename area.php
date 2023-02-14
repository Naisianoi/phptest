<?php
//Create a php page that when refreshed shows the area of a triangle with inputs from the url.
    if(isset($_GET["calculate"]) || isset($_GET["height"]) || isset($_GET["width"]) || isset($_GET["type"])) {
        //echo "Hi ". $_GET['name']. "<br/>";
        //echo "Your age is". $_GET['age']." years";
        switch (isset($_GET["type"]))
            {
                case "triangle";
                    include ('');
                    break;
                case "circle";
                    include ('');
                    break;
            }
    //else 
            //{};
        exit();
    }
?>

<html>
    <body>
        <form action = "<?php $_PHP_SELF ?>" method = "GET">
            Calculate: <input type="text" name="calculate"/> <br/>
            Height: <input type = "text" name = "height" /> <br/>
            Width: <input type="text" name="width"/> <br/>
            Hypotenuse: <input type="text" name="hypotenuse"/> <br/>
            Radius: <input type="text" name="radius"/> <br/>
            Type: <input type="text" name="type"/> <br/>
            <input type = "submit" />
        </form>
    </body>
</html>