<?php	function	link_isactive($page, $pagename) {
		if (strtolower($page) == strtolower($pagename)) {echo " class=\"active\"";}
		return;
	}
?>
<?php	function	verif_robot($check) {
			if ($check == 50) {return true;}
			return false;
		}
?>
<?php	function	get_type($type) {
			if ($type == 'boost') {return "Elo boost";}
			if ($type == 'wins') {return "Victoires";}
			if ($type == 'placement') {return "Matchs de placement";}
		return false;
}
?>
<?php	function	get_league($league, $division) {
		$str = "";
			if ($league == "bronz") {$str.= "Bronze";}
			else if ($league =="silv") {$str.= "Argent";}
			else if ($league =="gold") {$str.= "Or";}
			else if ($league =="plat") {$str.= "Platine";}
			else if ($league =="diam") {$str.= "Diamant";}
			if ($division == 1) {$str.= " I";}
			else if ($division == 2) {$str.= " II";}
			else if ($division == 3) {$str.= " III";}
			else if ($division == 4) {$str.= " IV";}
			else if ($division == 5) {$str.= " V";}
		return $str;
}
?>