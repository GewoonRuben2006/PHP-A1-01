<!DOCTYPE html>
<html lang="en"> 
    <head>
        <style>

</style>
        <title>Pyramide wow</title>
    </head>
    <body>
       
        <h1>Pyramide</h1>
        <Style></Style>
        <?php
        $kleur="red";
        $lengte=300;
        $breed=0;
        $dikte=10;
        for ($x = 0; $x <=10; $x++){ 
            if ($breed <= 300){
                ($breed += 30);
            }
            echo "<hr color=\"$kleur\" width=\"$breed\" size=\"$dikte\" align=center>";
          }
       
        
        ?>
    </body>
</html> 