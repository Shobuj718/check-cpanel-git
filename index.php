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


	<script type='text/javascript' charset='utf-8'>
  window.liveSiteAsyncInit = function() {
    LiveSite.init({
      id : 'WI-VV3JY8FIMSCUIZP8VWGB'
    });
  };
  (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0],
        p = 'https://',
        r = Math.floor(new Date().getTime() / 1000000);
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = p + "widgets.vcdnita.com/assets/livesite.js?" + r;
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'livesite-jssdk'));
</script>

</body>
</html>