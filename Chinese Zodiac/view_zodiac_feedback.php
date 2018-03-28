<h1>View Zodiac Feedback</h1>
<table border="1">
	<thead>
		<tr>
			<th>Date</th>
			<th>Time</th>
			<th>Sender</th>
			<th>Message</th>
		</tr>
	</thead>
	<tbody>
<?php

include "Includes/inc_connect.php";

$result = mysqli_query($con, 'SELECT * FROM `zodiacfeedback` WHERE `public_message` = "Y";');

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		//var_dump($row);
		echo "<tr><td>".$row["message_date"]."</td>
			      <td>".$row["message_time"]."</td>
			      <td>".$row["sender"]."</td>
			      <td>".$row["message"]."</td>
			  </tr>";
	}
}

?>
	</tbody>
</table>
