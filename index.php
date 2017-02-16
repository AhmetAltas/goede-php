<?php 


date_default_timezone_set("Europe/Amsterdam");
$hour = date("H");
$minut = date("i");
if ($hour >= 0) 
{
	$class = "nacht";
	if ($hour >= 6) 
	{
		$class = "morgen";
		if ($hour >= 12) 
		{
			$class = "middag";
			if ($hour >= 18) 
			{
				$class = "avond";
			}
		}
	}
}
?>
<!DOCTYPE html>
<head>
  	<title>goedemorgen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?php echo $class;?>">

	<div class="Tijd">
		<p>Goede<?php echo $class; ?>!</p>
		<p>Het is nu  <?php echo "$hour:$minut"; ?></p>
	</div>

</body>
</html>