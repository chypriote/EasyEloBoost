<?php if (!empty($_POST['user']) && !empty($_POST['pass'])) { 
	$requete= "SELECT * FROM pl_boosters WHERE pseudo='" . $_POST['user'] . "'";
	$result = mysql_query($requete);
	$data = mysql_fetch_assoc($result);
	$rows = mysql_num_rows($result);
	if ($rows != 0) {
		if ($_POST['pass'] == $data['pass']) {$_SESSION['user'] = $_POST['user'];
		} else {$error = 'pass';}
	} else {$error='user'; }
} else {
?><?php } ?>