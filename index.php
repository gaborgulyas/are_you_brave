<?php

header('X-Frame-Options: sameorigin');

date_default_timezone_set('Europe/Paris');

?>

<!DOCTYPE html>
<html>
	<title>Are You Brave?</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<link rel="stylesheet" href="./style/w3.css">
	<link rel="stylesheet" href="./style/font-awesome/css/font-awesome.min.css">

	<link rel="icon" href="./style/favicon.ico">

	<link rel="stylesheet" href="./javascript/jquery-ui-1.12/jquery-ui.min.css">
	<script type="text/javascript" src="./javascript/jquery-3.1.1.min.js"></script>
	<script src="./javascript/jquery-ui-1.12/jquery-ui.min.js"></script>

    <script src='./javascript/bowser.min.js'></script>
    <script src='./javascript/detect-mobile.js'></script>

    <link href="./style/index.css" rel="stylesheet" type="text/css" media="screen" />
<body>

<div id="main" class="w3-card-4 w3-center w3-padding-large" style="width: 100%; max-width: 1000px; padding: 0px; margin: auto; margin-top: 30px; margin-bottom: 50px;">
    <div class="w3-container">
        <h1 class='w3-center w3-text-white' style='font-weight: bold;'>Are You <span class="w3-white w3-text-deep-orange w3-padding"><img src="./style/brave.png" style="height: 1em;">Brave</span> ?</h1>
    </div>

	<p id="verdict" class="w3-xlarge"></p>

    <div class="w3-container w3-center" style="padding-top: 32px; padding-bottom: 16px;">
        Are You Brave? &ndash; &copy; <?php echo date("Y"); ?> all rights reserved &ndash; Check also: <a href="https://extensions.inrialpes.fr" style="color: #FFFFFF; font-weight: bold; text-decoration: underline">https://extensions.inrialpes.fr</a>
    </div>
</div>

</body>
</html>


<script type="text/javascript">
	$(document).ready(function()
	{
        $.ajax({
            url: "chrome-extension://fmdpfempfmekjkcfdehndghogpnpjeno/webtorrent.html",
            success: function(result)
            {
                $("#main").addClass("w3-green")
                $("#verdict").html("Hey, you are using the <code style='text-decoration: underline'>Brave browser</code>! Gotcha'!")
            },
            error: function(result)
            {
                $("#main").addClass("w3-red")
                $("#verdict").html("This doesn't seem to be the Brave browser, but rather it seems a <code style='text-decoration: underline'>"+bowser.name+" browser</code> instead.")
            },
        });
	});
</script>
