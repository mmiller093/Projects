<?php

#$test = "25213";

#echo preg_match("/\d{5}/", $test);
#echo("<br/><br/>");
#echo($test);

#$test ="Walker";

#echo preg_match("/W[a-z]+/", $test);

#$test = "Mr. Walker";
#echo preg_match("/^(Mr\. |Mrs\. |Ms\.) Walker/", $test);

#echo ("<br/><br/>");

#$test = "grandmother, grandfather, greatmother, greatfather";
#echo preg_match("/(grand|great)(fa|ma)ther$/",$test);

#echo ("<br/><br/>");

$test = "B00012345";
echo preg_match("/B\d{8}/", $test);
?>