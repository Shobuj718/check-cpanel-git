<!DOCTYPE html>
<html>
<head>
	<title>This is test site</title>
</head>
<body>

	<h2>This is test site for vcita website widget</h2>

  <?php 

  date_default_timezone_set('Australia/Adelaide');
    $adelaide = time();
    echo $adelaide." ad <br>";

    date_default_timezone_set('Australia/Melbourne');
    $melbourne = time();
    echo $melbourne." mel <br>";

    date_default_timezone_set('Australia/Sydney');
    $sydney = time();  
    echo $sydney." sy <br>";

    date_default_timezone_set('Australia/brisbane');
    $sydney = time();  
    echo $sydney." br <br>";

   ?>


	

</body>
</html>
