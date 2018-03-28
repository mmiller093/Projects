<?php
#$array_name = array(values);

$provinces = array(
"Newfoundland and Labrador", 
"Prince Edward Island", 
"Nova Scotia", 
"New Brunswick", 
"Quebec", 
"Ontario", 
"Manitoba", 
"Saskatchwan", 
"Alberta", 
"Brittish Columbia"
);

$territories = array(
"Nunavut",
"Northwest Territories",
"Yukon Territories,"
);

echo "<p>Canada's smallest province is $provinces[1].<br/>";
echo "<p>Canada's largest province is $provinces[4].<br/>";
echo "<p>The most Canadian movie steriotypical province is $provinces[4]";
echo "<p>A place I would visit in Canada would be $provinces[5]";

echo "<p>Canada has ", count($provinces), " provinces and ", count($territories), " territories.<br/>";
echo "<br/>";

echo "<pre>";
print_r($provinces);
echo "</pre>";

?>