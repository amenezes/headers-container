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
					echo "<li class=\"active\"><a href=dashboard.php>Dashboard</a></li>";
		      echo "<li><a href=\"https://www.owasp.org/index.php/OWASP_Secure_Headers_Project\">About</a></li>";
		    echo "</ul>";
		  echo "</div>";
		echo "</div>";
		echo "</nav>";

		echo "<div class=\"container-fluid\">";
			echo "<div class=\"row\">";
				echo "<div class=\"container col-xs-12 col-sm-9 col-sm-offset-1 col-md-10 col-md-offset-0 main\">";

				  # dashboard
          echo "<div class=\"row img-responsive placeholders container-fluid col-xs-12 col-sm-9 col-md-8 col-sm-offset-2\">";
						#echo "<iframe src=\"http://localhost:5601/app/kibana#/dashboard/dash2?embed=true&_g=(refreshInterval:(display:Off,pause:!f,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(filters:!(),options:(darkTheme:!f),panels:!((col:1,id:'X-Frame-Options-(XFO)',panelIndex:7,row:5,size_x:3,size_y:2,type:visualization),(col:10,id:Server,panelIndex:8,row:5,size_x:3,size_y:2,type:visualization),(col:10,id:X-Content-Type-Options,panelIndex:9,row:1,size_x:3,size_y:2,type:visualization),(col:10,id:X-Permitted-Cross-Domain-Policies,panelIndex:10,row:7,size_x:3,size_y:2,type:visualization),(col:1,id:X-XSS-Protection,panelIndex:11,row:7,size_x:3,size_y:2,type:visualization),(col:4,id:Secure-Headers-Summary,panelIndex:12,row:3,size_x:6,size_y:3,type:visualization),(col:1,id:'Strict-Transport-Security-(HSTS)',panelIndex:13,row:1,size_x:3,size_y:2,type:visualization),(col:1,id:Public-Key-Pins,panelIndex:14,row:3,size_x:3,size_y:2,type:visualization),(col:10,id:Content-Security-Policy,panelIndex:15,row:3,size_x:3,size_y:2,type:visualization),(col:4,id:Secure-Headers-Use,panelIndex:17,row:6,size_x:6,size_y:3,type:visualization),(col:4,id:Project-About,panelIndex:18,row:1,size_x:6,size_y:2,type:visualization)),query:(query_string:(analyze_wildcard:!t,query:'*')),title:dash2,uiState:(P-10:(spy:(mode:(fill:!f,name:!n))),P-11:(spy:(mode:(fill:!f,name:!n))),P-12:(spy:(mode:(fill:!f,name:!n))),P-15:(spy:(mode:(fill:!f,name:!n))),P-17:(vis:(legendOpen:!f))))\" height=\"785\" width=\"1350\"></iframe>";
            echo "<iframe src=\"http://localhost:5601/app/kibana#/dashboard/dash4?embed=true&_g=(refreshInterval:(display:Off,pause:!f,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(filters:!(),options:(darkTheme:!f),panels:!((col:1,id:Content-Security-Policy,panelIndex:15,row:1,size_x:3,size_y:4,type:visualization),(col:4,id:X-XSS-Protection,panelIndex:11,row:1,size_x:3,size_y:2,type:visualization),(col:7,id:'X-Frame-Options-(XFO)',panelIndex:7,row:1,size_x:3,size_y:2,type:visualization),(col:10,id:Public-Key-Pins,panelIndex:14,row:1,size_x:3,size_y:2,type:visualization),(col:4,id:X-Content-Type-Options,panelIndex:9,row:3,size_x:3,size_y:2,type:visualization),(col:7,id:'Strict-Transport-Security-(HSTS)',panelIndex:13,row:3,size_x:3,size_y:2,type:visualization),(col:10,id:X-Permitted-Cross-Domain-Policies,panelIndex:10,row:3,size_x:3,size_y:2,type:visualization),(col:3,id:Secure-Headers-Summary,panelIndex:12,row:5,size_x:3,size_y:3,type:visualization),(col:6,id:Secure-Headers-Use,panelIndex:17,row:5,size_x:7,size_y:3,type:visualization),(col:1,id:Project-About,panelIndex:18,row:5,size_x:2,size_y:3,type:visualization)),query:(query_string:(analyze_wildcard:!t,query:'*')),title:dash4,uiState:(P-10:(spy:(mode:(fill:!f,name:!n))),P-11:(spy:(mode:(fill:!f,name:!n))),P-12:(spy:(mode:(fill:!f,name:!n)),vis:(params:(sort:(columnIndex:!n,direction:!n)))),P-15:(spy:(mode:(fill:!f,name:!n))),P-17:(vis:(legendOpen:!f)),P-9:(vis:(colors:(nosniff:%23BF1B00),legendOpen:!t))))\" height=\"785\" width=\"1350\"></iframe>";
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
