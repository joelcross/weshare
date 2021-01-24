

<?php

#connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=donation_locations', "root", "");

$locid = 5;
$sql = "select t.name
from   tag t
where  t.id in (select tag_id from locationtag where location_id =  $locid);";
$stmt = $pdo->prepare($sql);   #create the query
$stmt->execute();   #bind the parameters

while ($row = $stmt->fetch()) {
	echo "</td><td>".$row["name"]."</td></tr>,\n";
}


?>