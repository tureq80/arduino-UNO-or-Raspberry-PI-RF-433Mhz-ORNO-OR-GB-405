<html><head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>

 <div class="container">
 <div class="header clearfix">
<form name = "tryLogin" action = "" method = "GET">
<input class="btn btn-default btn-lg" type="submit" name="task" value="pogoda" />
<input class="btn btn-default btn-lg" type="submit" name="task" value="football" /></br>
<input class="btn btn-default btn-lg" type="submit" name="task" value="A_ON" />
<input class="btn btn-default btn-lg" type="submit" name="task" value="A_OFF" /></br>
<input class="btn btn-default btn-lg" type="submit" name="task" value="B_ON" />
<input class="btn btn-default btn-lg" type="submit" name="task" value="B_OFF"> </br>
<input class="btn btn-default btn-lg" type="submit" name="task" value="C_ON" />
<input class="btn btn-default btn-lg" type="submit" name="task" value="C_OFF" /></br>
<input class="btn btn-default btn-lg" type="submit" name="task" value="D_ON" />
<input class="btn btn-default btn-lg" type="submit" name="task" value="D_OFF" /></br>
<input class="btn btn-default btn-lg" type="submit" name="task" value="E_ON" />
<input class="btn btn-default btn-lg" type="submit" name="task" value="E_OFF" /></br><br>
<input class="btn btn-default btn-lg" type="submit" name="task" value="ALL_ON" />
<input class="btn btn-default btn-lg" type="submit" name="task" value="ALL_OFF" /></br>


</form>


<?php 

if (isset($_GET['task'])) {
    if ($_GET['task'] == 'pogoda') {

	shell_exec('sudo /home/pi/pogoda.sh');

    } 

else if ($_GET['task'] == 'football') {

	shell_exec('sudo /home/pi/mecze.sh');

    }
	
	else if ($_GET['task'] == 'C_ON') {

	shell_exec('cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16766036');

    }
	
	else if ($_GET['task'] == 'C_OFF') {

	shell_exec('cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16766033');

    }
	
	else if ($_GET['task'] == 'A_ON') {

	shell_exec('cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16762196');

    }
	
	else if ($_GET['task'] == 'A_OFF') {

	shell_exec('cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16762193');

    }
	
	else if ($_GET['task'] == 'B_ON') {

	shell_exec('cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16765268');

    }
	
	else if ($_GET['task'] == 'B_OFF') {

	shell_exec('cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16765265');

    }
	
	
	else if ($_GET['task'] == 'D_ON') {

	shell_exec('cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16766228');

    }
	
	else if ($_GET['task'] == 'D_OFF') {

	shell_exec('cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16766225');

    }
	
	else if ($_GET['task'] == 'E_ON') {

	shell_exec('cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16766276');

    }
	
	else if ($_GET['task'] == 'E_OFF') {

	shell_exec('cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16766273');

    }
	
	
	else if ($_GET['task'] == 'ALL_ON') {

	shell_exec('cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16762196 && sudo ./codesend 16766036');

    }
	
	else if ($_GET['task'] == 'ALL_OFF') {

	shell_exec('cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16762193 && sudo ./codesend 16766033 && sudo ./codesend 16765265 && sudo ./codesend 16766225 && sudo ./codesend 16766273');

    }
	
	
}


?>

</div></div>
</body>