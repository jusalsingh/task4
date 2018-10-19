<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Days in English and French</title>
    <meta name="description" content="Understanding PHP" />
	<meta name="keywords"    content="Days, English, French" />
	<meta name="author"      content="Jusal Singh" />
</head>

<body>
   <h1>Creating Web Applications - Lab08</h1>

<?php
    $days=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    $days_merge=implode(", ", $days);
    
    echo "<p>The Days of the week in English are:</p>";
    echo "<p>$days_merge</p>";
    
    $days=array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
    $days_merge=implode(", ", $days);
    
    echo "<p>The Days of the week in French are:</p>";
    echo "<p>$days_merge</p>";
?>
</body>
</html>