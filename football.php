<?php
header('Content-Type: text/html; charset=utf-8');

	//times and days variables
	$d1 = strtotime("tomorrow");
	$month = strtotime("+21 day");
	$d7 = strtotime("+7 day");
	$jutro = date("Y-m-d", $d1);
	$jutro2 = date("d-m-y", $d1);
	$dzis = date("Y-m-d");
	$dzis2 = date("d-m-y");
	$dni7 = date("Y-m-d", $d7);
	$miesiac = date("Y-m-d", $month);
	$godzina_teraz = date("H:i");

	//champion league - FC Bayern Munchen
	//$uri = 'http://api.football-data.org/v1/soccerseasons/440/fixtures/?timeFrameStart=2016-10-28&timeFrameEnd=2016-11-28;

    $uri = 'http://api.football-data.org/v1/teams/5/fixtures/?timeFrameStart='.$dzis.'&timeFrameEnd='.$miesiac;
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: ########### YOUR-FREE-API-KEY ################';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $obj = json_decode($response);
	

	$data_meczu = $obj->fixtures[0]->date;
	$htn = $obj->fixtures[0]->homeTeamName;
	$atn = $obj->fixtures[0]->awayTeamName;
	$liczba_meczy = $obj->count;
	$najblizszy_mecz = date("d-m-y", strtotime($data_meczu));
	$godzina_meczu = date("H:i", strtotime($data_meczu));


	if($liczba_meczy=='0') {
		
		echo "w bazie danych na najbliższy okres brak meczy";
		
	} elseif ($dzis2==$najblizszy_mecz) {

		echo 'Dziś jest ciekawy mecz o godzinie '.$godzina_meczu.'. '.$htn.' kontra '.$atn;
		
	
	} elseif ($jutro2==$najblizszy_mecz) {

		echo 'Już jutro jest ciekawy mecz o godzinie '.$godzina_meczu.'. '.$htn.' kontra '.$atn;
	
	} 


	else {

	echo 'Najbliższy ciekawy mecz jest '.$najblizszy_mecz.'. O godzinie '.$godzina_meczu.'. '.$htn.' kontra '.$atn;

	}

?>
