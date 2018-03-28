<h1>For Loop Signs</h1>
<?php

$zodiacSigns = array( "rat", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "goat", "monkey", "rooster", "dog", "pig");

$col = 1;
echo '<table>';
echo '<tr>';

for ( $zoSign = 0; $zoSign < count($zodiacSigns); ++$zoSign) {
  echo '<td><img src="Images/'.$zodiacSigns[$zoSign].'.gif"></td>';
}
echo '</tr>';
echo '<tr>';
for ( $year = 1912; $year <= date("Y"); ++$year ) { 
  echo '<td>'.$year.'</td>';
  if ( $col % 12 === 0 ) {
    echo '</tr>';
    echo '<tr>';
  }
  $col++;
}
echo '</tr>';
echo '</table>';
?>