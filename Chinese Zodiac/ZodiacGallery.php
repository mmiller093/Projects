<h2>Zodiac Images Gallery</h2> 
<p>Click a thumbnail image below for a better view of the image.</p> 
<?php 

$ZodiacImages = array("Images/Rat.gif" => "Rat", 
                      "Images/ox.gif" => "Ox", 
                      "Images/Tiger.gif" => "Tiger", 
                      "Images/Rabbit.gif" => "Rabbit", 
                      "Images/dragon.gif" => "Dragon", 
                      "Images/snake.gif" => "Snake", 
                      "Images/horse.gif" => "Horse", 
                      "Images/goat.gif" => "Goat", 
                      "Images/monkey.gif" => "Monkey", 
                      "Images/rooster.gif" => "Rooster", 
                      "Images/dog.gif" => "Dog", 
                      "Images/pig.gif" => "Pig"); 
                     
                     

echo "<p><a href=\"Images/Rat.gif\"><img src=\"Images/Rat.gif"; 
foreach ($ZodiacImages as $Sign) { 

    echo "\" alt=\"" . $Sign . "\" height=\"20\" width=\"20\"/></a>&nbsp;&nbsp;" . $Sign . "<br /><a href=\"" . key($ZodiacImages) . "\"><img src=\"" . key($ZodiacImages); 
    next($ZodiacImages); 

} 
echo "</p>"; 

?> 
