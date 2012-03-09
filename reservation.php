<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Reservaion</title>
<link type="text/css" href="css/ui-darkness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script>
	$(function() {
		$("#tabs" ).tabs();
	});
</script>
</head>
<body>
    <div id="textbox">
  		<p class="alignleft">[LOGO] Knowledge Channel</p>
  		<p class="alignright">Home | Reservation | Asset Management | Help</p>
	</div>
    <div style="clear: both;"></div>

	<div id="tabs">
    	<ul>
			<li><a href="#forms">Request Forms</a></li>
			<li><a href="#pending">Pending</a></li>
			<li><a href="#disapproved">Disapproved</a></li>
            <li><a href="#cancelled">Cancelled</a></li>
			<li><a href="#approved">Approved</a></li>
		</ul>
        <div id = "forms">
        </div>
        <div id = "pending">
        </div>
        <div id = "disapproved">
        </div>
        <div id = "cancelled">
        </div>
        <div id = "approved">
        </div>
	</div>
</body>
</html>