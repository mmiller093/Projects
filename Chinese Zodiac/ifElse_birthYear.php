<?php

if(isset($_POST['showSign']) and isset($_POST['birthYr'])){
  
  $startYr = 1912;
  $zodiacYear = ($_POST['birthYr'] - 1912) % 12;
       
  if ($zodiacYear == 0) {
      echo "You were born under sign of the Rat!" . "<br>";
      echo "<img src=\"Images/Rat.gif\" />";
    }
  elseif ($zodiacYear == 1) {
      echo "You were born under sign of the ox!" . "<br>";
      echo "<img src=\"Images/Ox.gif\" />";
    }
  elseif ($zodiacYear == 2) {
      echo "You were born under sign of the tiger!" . "<br>";
      echo "<img src=\"Images/Tiger.gif\" />";
    }
  elseif ($zodiacYear == 3) {
      echo "You were born under sign of the rabbit!" . "<br>";
      echo "<img src=\"Images/Rabbit.gif\" />";
    }
  elseif ($zodiacYear == 4) {
      echo "You were born under sign of the dragon!" . "<br>";
      echo "<img src=\"Images/Dragon.gif\" />";
    }
  elseif ($zodiacYear == 5) {
      echo "You were born under sign of the snake!" . "<br>";
      echo "<img src=\"Images/Snake.gif\" />";
    }
  elseif ($zodiacYear == 6) {
      echo "You were born under sign of the horse!" . "<br>";
      echo "<img src=\"Images/Horse.gif\" />";
    }
  elseif ($zodiacYear == 7) {
      echo "You were born under sign of the goat!" . "<br>";
      echo "<img src=\"Images/Goat.gif\" />";
    }
  elseif ($zodiacYear == 8) {
      echo "You were born under sign of the monkey!" . "<br>";
      echo "<img src=\"Images/Monkey.gif\" />";
    }
  elseif ($zodiacYear == 9) {
      echo "You were born under sign of the rooster!" . "<br>";
      echo "<img src=\"Images/Rooster.gif\" />";
  }
  elseif ($zodiacYear == 10) {
      echo "You were born under sign of the dog!" . "<br>";
      echo "<img src=\"Images/Dog.gif\" />";
  }
  elseif ($zodiacYear == 11) {
      echo "You were born under sign of the pig!" . "<br>";
      echo "<img src=\"Images/Pig.gif\" />";
  }
  $file = fopen("statistics/".$_POST['birthYr'].".txt","w");
  $count = 0;
  fwrite($file,"You are visitor" . $count+=1 ." to enter ".$_POST['birthYr']);
  fclose($file);
  file_put_contents("statistics.txt", $count);
  echo "<br>" . "Thank You!";
}
else
{
?>
<form action="ifElse_birthYear.php" method="post">
  <h1>Birth Details</h1>
  <p>Birth Year: <input type="text" name="birthYr" value=""></p>
  <button type="submit" value="clear" name="clear">Clear Form</button>
  <button type="submit" balue="show" name="showSign">Show Sign</button>
</form>
  
<?php  
}
?>
