<!DOCTYPE html>
<html>
    <head>
        <title>
            Calendar
        </title>
        <style type="text/css">
        	body {
        		font-family: Arial, Helvetica, sans-serif;
        	}
        	td, th {
        		margin: 0;
        		padding: 2px;
        		border: 1px solid #777;
        	}
        	table {
        		border: 2px solid #333;
        		text-align: center;
        	}
        	.month-year-banner {
        		font-size: 35px;
        		font-weight: 700;
        	}
        	.days-of-month {
        		font-size: 20px;
        		font-weight: 400;
        	}
        	.day-nums {
        		font-weight: 700;
        	}
        	.events {
        		text-align: left;
        	}
        	td.empty {
        		color: #ccc;
        		font-style: italic;
        	}
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr class="month-year-banner">
                    <th colspan="7">December 2016</th>
                </tr>
                <tr class="days-of-month">
                    <th>Sunday</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                </tr>
            </thead>
            <tbody>
<?php

$month  = 8;
$year = 2017;

// first day of month
$running_day = date('w',mktime(0,0,0,$month,1,$year));

$days_in_month = date('t',mktime(0,0,0,$month,1,$year));

// all day numbers
$dates_array = Array();

$x=0;

while ($x < $running_day) {
    $dates_array[] = -1;
    $x++;    
}

for ($list_day=1; $list_day <= $days_in_month; $list_day++) {
    $dates_array[] = $list_day;
}
?>
            	<tr class="day-nums">
            		<td></td>
            		<td>1</td>
            		<td>2</td>
            		<td>3</td>
            		<td>4</td>
            		<td>5</td>
            		<td>6</td>
            	</tr>
            	<tr class="events">
            		<td></td>
            		<td class="empty">None</td>
            		<td class="empty">None</td>
            		<td>
            			<div class="event">Therapy</div>
            		</td>
            		<td class="empty">None</td>
            		<td class="empty">None</td>
            		<td class="empty">None</td>
            	</tr>
            </tbody>
        </table>
    </body>
</html>