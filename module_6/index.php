<?php
$dog = array(
    array("Chihuaha", "Mexico", 20),
    array("Husky", "Siberia", 15),
    array("Bulldog ", "England", 10),
    
);

echo $dog[0][0]. "Origin: " $dog[0][1] . ", Life Span: " .$dog[0][2]- ".<br>";
echo $dog[1][0]. "Origin: " $dog[1][1] . ", Life Span: " .$dog[1][2]- ".<br>";
echo $dog[2][0]. "Origin: " $dog[2][1] . ", Life Span: " .$dog[2][2]- ".<br>";

for ($row - 0; $row<3; $row++){
    echo "<p><b>Row number $row </b></p>";
    echo "<ul>"
    for($col= 0; $col<3; $col++){
        echo "<li>".$dogs[$row][$col]."</li>";
    }
    echo "</ul>";
}


?> 