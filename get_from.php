<!DOCTYPE html>
<html>
    <head>
        <title>From 2</title>
    </head>

    <body>
        <section>
        <?php
            $color = $_GET['color'];
            $size = $_GET['size'];
            $dedication = $_GET['dedication'];


            if ($color == 'Yellow Gold' && $size == '12') 
                echo '<h1>Unfortunately, the size ' . $size . 'cm, in color ' . $color . ' of the bracelet - is not in stock.</h1>';
            else 
                echo '<h1>Excellent! The bracelet in the color ' . $color . ', in size ' . $size . 'cm, with the dedication: ' . $dedication . '<br> Is on its way to you.</h1>';
        ?>
        </section> 
    </body>
</html>