<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SecureHeaders Project</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body style="font-family: 'Roboto', sans-serif;">
	<?php
	  echo "<br><br><br>";
		echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">";
		echo "<div class=\"container-fluid\">";
		  echo "<div class=\"navbar-header\">";
		    echo "<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">";
		      echo "<span class=\"sr-only\">Toggle navigation</span>";
		      echo "<span class=\"icon-bar\"></span>";
		      echo "<span class=\"icon-bar\"></span>";
		      echo "<span class=\"icon-bar\"></span>";
		    echo "</button>";
		    echo "<a class=\"navbar-brand\" href=\"#\">SecureHeaders</a>";
		  echo "</div>";
		  echo "<div id=\"navbar\" class=\"navbar-collapse collapse\">";
		    echo "<ul class=\"nav navbar-nav navbar-right\">";
		      echo "<li><a href=\"/\">Home</a></li>";
					echo "<li><a href=dashboard.php>Dashboard</a></li>";
					echo "<li class=\"active\"><a href=worldmap.php>World Map</a></li>";
		      echo "<li><a href=\"https://www.owasp.org/index.php/OWASP_Secure_Headers_Project\">About</a></li>";
		    echo "</ul>";
		  echo "</div>";
		echo "</div>";
		echo "</nav>";

		echo "<div class=\"container-fluid\">";
			echo "<div class=\"row\">";
				echo "<div class=\"container col-xs-12 col-sm-9 col-sm-offset-1 col-md-10 col-md-offset-0 main\">";

				  # dashboard
          echo "<div class=\"row img-responsive placeholders container-fluid col-xs-12 col-sm-9 col-md-8 col-sm-offset-1\">";
					  echo "<iframe src=\"http://localhost:5601/app/kibana#/dashboard/dash5?embed=true&_g=(refreshInterval:(display:Off,pause:!f,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(filters:!(),options:(darkTheme:!f),panels:!((col:1,id:World-Map,panelIndex:1,row:1,size_x:7,size_y:7,type:visualization),(col:8,id:Secure-Headers-Use,panelIndex:3,row:3,size_x:5,size_y:5,type:visualization),(col:8,id:World-Map-About,panelIndex:5,row:1,size_x:3,size_y:2,type:visualization),(col:11,id:HTTP-Secure-Headers,panelIndex:6,row:1,size_x:2,size_y:2,type:visualization)),query:(query_string:(analyze_wildcard:!t,query:'*')),title:dash5,uiState:(P-1:(spy:(mode:(fill:!f,name:!n))),P-3:(vis:(legendOpen:!f))))\" height=\"785\" width=\"1630\"></iframe>";
					echo "</div>";
          echo "<div class=\"col-xs-12 col-sm-12 col-md-10 col-sm-offset-2 col-sm-offset-1 col-md-offset-1 placeholder\" id=\"container\" data-highcharts-chart=\"0\"></div>";

				echo "</div>";
			echo "</div>";
		echo "</div>";

	include_once 'footerui.php';

?>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
