<!DOCTYPE html>
<html lang="en"> 
    <head>
     
        <title>Eindopdracht</title>
    </head>
    <style>
        .col{
            outline: 3px solid;
        }
        .row{
            outline: 3px solid;
        }
        .both{
            outline: 3px solid red;
        }
    </style>
    <body>
          
          
    <?php
    
   $kleuren = array("blue","yellow","green");


   $dobbelsteen_row = rand(1, 6);
   $dobbelsteen_col = rand(1, 6);
   

// Create a 6x6 grid of images
echo '<table>';
for ($b = 0; $b < 6; $b++) {
    $style = '';
    
    
    echo '<tr>';
    for ($j = 0; $j < 6; $j++) {

        if(($dobbelsteen_row-1) == $b && ($dobbelsteen_col-1) == $j) {
            $style = 'both';
        }else if(($dobbelsteen_row-1) == $b){
            $style = 'row';
        } else if(($dobbelsteen_col-1) == $j){
            $style = 'col';
        } else {
            $style = '';
        }
       
        // Get the next image filename from the shuffled array
        $image = rand(1, 4);
        $kleur = $kleuren[rand(0, 2)];

        // Output an <img> tag with the image filename
        echo '<td class="'.$style.' "style="background-color: '.$kleur.'"><img src="' . $image . '.png"width="75"></td>';
    }
    echo '</tr>';
}
if ($dobbelsteen_row == 1){
    echo '<td><img src="39px-Dice-1.png" width="75"></td>';
}
if ($dobbelsteen_row == 2){
    echo '<td><img src="39px-Dice-2.png" width="75"></td>';
}
if ($dobbelsteen_row == 3){
    echo '<td><img src="39px-Dice-3.png" width="75"></td>';
}
if ($dobbelsteen_row == 4){
    echo '<td><img src="39px-Dice-4.png" width="75"></td>';
}if ($dobbelsteen_row == 5){
    echo '<td><img src="39px-Dice-5.png" width="75"></td>';
}if ($dobbelsteen_row == 6){
    echo '<td><img src="39px-Dice-6.png" width="75"></td>';
}
if ($dobbelsteen_col == 1){
    echo '<td><img src="39px-Dice-1.png" width="75"></td>';
}
if ($dobbelsteen_col == 2){
    echo '<td><img src="39px-Dice-2.png" width="75"></td>';
}
if ($dobbelsteen_col == 3){
    echo '<td><img src="39px-Dice-3.png" width="75"></td>';
}
if ($dobbelsteen_col == 4){
    echo '<td><img src="39px-Dice-4.png" width="75"></td>';
}if ($dobbelsteen_col == 5){
    echo '<td><img src="39px-Dice-5.png" width="75"></td>';
}if ($dobbelsteen_col == 6){
    echo '<td><img src="39px-Dice-6.png" width="75"></td>';
}

    

    
    



echo '</table>';

echo 'Dobbelsteen row: '.$dobbelsteen_row;
echo 'Dobbelsteen col: '.$dobbelsteen_col;
?>
   

     <br>
     <br>
   <a href="<?php $_SERVER['PHP_SELF']; ?>">Refresh</a>
   <a href="<?php $_SERVER['PHP_SELF']; ?>">Roll</a>
    </body>
</html> 