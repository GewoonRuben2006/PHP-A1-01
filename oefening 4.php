<!DOCTYPE html>
<html lang="en"> 
    <head>
        <style>

</style>
        <title>Pyramide wow</title>
    </head>
    <body>
       <?php
        $beginkapitaal=300;
        $rente=2;
        $kapitaal=$beginkapitaal;
        $beginjaar=2023;
        echo "start kapitaal ".$beginkapitaal." ";
        echo "start rente ".$rente." <br>";

         while ($kapitaal < $beginkapitaal*2){
            $kapitaal = $kapitaal + $kapitaal*$rente/100;
           
            echo "in het jaar ".++$beginjaar." is het kapitaal ".$kapitaal." euro<br>";
         }
        
         

       
        
        ?>
    </body>
</html> 