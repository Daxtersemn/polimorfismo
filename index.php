<html>
    <body>
    <?php
    require "codigo.php";
    $resolver = new Operaciones;
	
        echo $resolver->convertirdolar(75);
        echo "<br>";
        echo $resolver->sumar(75);
        echo "<br>";
	
        ?>
    </body>
<html>