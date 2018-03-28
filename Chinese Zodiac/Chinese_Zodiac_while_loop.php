<h1>While Loop Signs</h1>

<?php
$zodiacSigns = array( "rat", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "goat", "monkey", "rooster", "dog", "pig");
$col = 1;
$zodSign = 0;
$year = 1912;

echo '<table>';
echo '<tr>';
while ( $zodSign < count($zodiacSigns)) {
  echo '<td><img src="Images/'.$zodiacSigns[$zodSign].'.gif"></td>';
  $zodSign++;
}
echo '</tr>';
echo '<tr>';
while ( $year <= date("Y")) {
  echo '<td>'.$year.'</td>';
  if ( $col % 12 === 0 ) {
    echo '</tr>';
    echo '<tr>';
  }
  $year++;
  $col++;
}
echo '</tr>';
echo '</table>';
?>