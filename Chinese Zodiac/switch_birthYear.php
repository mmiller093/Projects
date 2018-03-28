<?php

$ZodiacSigns = array("rat" => array('startYr' => '1900', 'endYr' => '2020', 'president' => 'George Washington'),
                     "ox" => array('startYr' => '1901', 'endYr' => '2021', 'president' => 'Barrack Obama'),
                     "tiger" => array('startYr' => '1902', 'endYr' => '2022', 'president' => 'Dwight Eisenhower'),
                     "rabbit" => array('startYr' => '1903', 'endYr' => '2023', 'president' => 'John Adams'),
                     "dragon" => array('startYr' => '1904', 'endYr' => '2024', 'president' => 'Abraham Lincoln'),
                     "snake" => array('startYr' => '1905', 'endYr' => '2025', 'president' => 'John Kennedy'),
                     "horse" => array('startYr' => '1906', 'endYr' => '2026', 'president' => 'Theodore Roosevelt'),
                     "goat" => array('startYr' => '1907', 'endYr' => '2027', 'president' => 'James Madison'),
                     "monkey" => array('startYr' => '1908', 'endYr' => '2028', 'president' => 'Harry Truman'),
                     "rooster" => array('startYr' => '1909', 'endYr' => '2029', 'president' => 'Grover Cleveland'),
                     "dog" => array('startYr' => '1910', 'endYr' => '2030', 'president' => 'George Washington Bush'),
                     "pig" => array('startYr' => '1911', 'endYr' => '2031', 'president' => 'Ronald Reagan')
                     );

if(isset($_POST['showSign']) and isset($_POST['birthYr'])){
  
  $startYr = 1900;
  $zodiacYear = ($_POST['birthYr'] - 1900) % 12;
       
  switch ($zodiacYear) {
    case 0:
      echo "You were born under sign of the Rat" . "<br>";
      echo "President " . $ZodiacSigns["rat"]["president"] . " was also born under this sign."."<br>";
      echo "Common years of the rat are: ";
      for ($i=$ZodiacSigns["rat"]["startYr"]; $i <= $ZodiacSigns["rat"]["endYr"]; $i+=12) { 
        echo $i." ";
      }
      echo "<br>";
      echo "<img src=\"Images/Rat.gif\" />";
      break;

    case 1:
      echo "You were born under sign of the ox" . "<br>";
      echo "President " . $ZodiacSigns["ox"]["president"] . " was also born under this sign."."<br>";
      echo "Common years of the ox are: ";
      for ($i=$ZodiacSigns["ox"]["startYr"]; $i <= $ZodiacSigns["ox"]["endYr"]; $i+=12) { 
        echo $i." ";
      }
      echo "<br>";
      echo "<img src=\"Images/Ox.gif\" />";
      break;

    case 2:
      echo "You were born under sign of the tiger" . "<br>";
      echo "President " . $ZodiacSigns["tiger"]["president"] . " was also born under this sign. "."<br>";
      echo "Common years of the tiger are: ";
      for ($i=$ZodiacSigns["tiger"]["startYr"]; $i <= $ZodiacSigns["tiger"]["endYr"]; $i+=12) {
        echo $i." ";
      }
      echo "<br>";
      echo "<img src=\"Images/Tiger.gif\" />";
      break;

    case 3: 
      echo "You were born under sign of the rabbit" . "<br>";
      echo "President " . $ZodiacSigns["rabbit"]["president"] . " was also born under this sign. "."<br>";
      echo "Common years of the rabbit are: ";
      for ($i=$ZodiacSigns["rabbit"]["startYr"]; $i <= $ZodiacSigns["rabbit"]["endYr"]; $i+=12) {
        echo $i." ";
      }
      echo "<br>";
      echo "<img src=\"Images/Rabbit.gif\" />";
      break;

    case 4:
      echo "You were born under sign of the dragon" . "<br>";
      echo "President ". $ZodiacSigns["dragon"]["president"] . " was also born under this sign. "."<br>";
      echo "Common years of the dragon are: ";
      for ($i=$ZodiacSigns["dragon"]["startYr"]; $i <= $ZodiacSigns["dragon"]["endYr"]; $i+=12) {
        echo $i." ";
      }
      echo "<br>";
      echo "<img src=\"Images/Dragon.gif\" />";
      break;

    case 5:
      echo "You were born under sign of the snake" . "<br>";
      echo "President ". $ZodiacSigns["snake"]["president"] ." was also born under this sign. "."<br>";
      echo "Common years of the snake are: ";
      for ($i=$ZodiacSigns["snake"]["startYr"]; $i <= $ZodiacSigns["snake"]["endYr"]; $i+=12) {
        echo $i." ";
      }
      echo "<br>";
      echo "<img src=\"Images/Snake.gif\" />";
      break;
      
    case 6:
      echo "You were born under sign of the horse" . "<br>";
      echo "President ". $ZodiacSigns["horse"]["president"] ." was also born under this sign "."<br>";
      echo "Common years of the horse are: ";
      for ($i=$ZodiacSigns["horse"]["startYr"]; $i <= $ZodiacSigns["horse"]["endYr"]; $i+=12) {
        echo $i." ";
      }
      echo "<br>";
      echo "<img src=\"Images/Horse.gif\" />";
      break;

    case 7:
      echo "You were born under sign of the goat" . "<br>";
      echo "President ". $ZodiacSigns["goat"]["president"] ." was also born under this sign "."<br>";
      echo "Common years of the goat are: ";
      for ($i=$ZodiacSigns["goat"]["startYr"]; $i <= $ZodiacSigns["goat"]["endYr"]; $i+=12) {
        echo $i." ";
      }
      echo "<br>";
      echo "<img src=\"Images/Goat.gif\" />";
      break;

    case 8:
      echo "You were born under sign of the monkey" . "<br>";
      echo "President ". $ZodiacSigns["monkey"]["president"] ." was also born under this sign "."<br>";
      echo "Common years of the monkey are: ";
      for ($i=$ZodiacSigns["monkey"]["startYr"]; $i <= $ZodiacSigns["monkey"]["endYr"]; $i+=12) {
        echo $i." ";
      }
      echo "<br>";
      echo "<img src=\"Images/Monkey.gif\" />";
      break;

    case 9:
      echo "You were born under sign of the rooster" . "<br>";
      echo "President ". $ZodiacSigns["rooster"]["president"] ." was also born under this sign "."<br>";
      echo "Common years of the rooster are: ";
      for ($i=$ZodiacSigns["rooster"]["startYr"]; $i <= $ZodiacSigns["rooster"]["endYr"]; $i+=12) {
        echo $i." ";
      }
      echo "<br>";
      echo "<img src=\"Images/Rooster.gif\" />";
      break;

    case 10:
      echo "You were born under sign of the dog" . "<br>";
      echo "President ". $ZodiacSigns["dog"]["president"] ." was also born under this sign "."<br>";
      echo "Common years of the dog are: ";
      for ($i=$ZodiacSigns["dog"]["startYr"]; $i <= $ZodiacSigns["dog"]["endYr"]; $i+=12) {
        echo $i." ";
      }
      echo "<br>";
      echo "<img src=\"Images/Dog.gif\" />";
      break;

    case 11:
      echo "You were born under sign of the pig" . "<br>";
      echo "President ". $ZodiacSigns["pig"]["president"] ." was also born under this sign "."<br>";
      echo "Common years of the pig are: ";
      for ($i=$ZodiacSigns["pig"]["startYr"]; $i <= $ZodiacSigns["pig"]["endYr"]; $i+=12) {
        echo $i." ";
      }
      echo "<br>";
      echo "<img src=\"Images/Pig.gif\" />";
      break;
  }
  $file = fopen("statistics/".$_POST['birthYr'].".txt","w");
  $count = 0;
  fwrite($file,"You are visitor" . $count+=1);
  fclose($file);
  file_put_contents("statistics.txt", $count);
  echo "<br>" . "Thank You!";
}
else
{
?>
<form action="switch_birthYear.php" method="post">
  <h1>Birth Details</h1>
  <p>Birth Year: <input type="text" name="birthYr" value=""></p>
  <button type="submit" value="clear" name="clear">Clear Form</button>
  <button type="submit" value="show" name="showSign">Show Sign</button>
</form>
  
<?php  
}
?>
