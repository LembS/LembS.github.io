<?php
	$mailing = mail("manuelmontesbermudez@gmail.com", $_POST['subject'], $_POST['message'], "From: Miguel Angel Alvarez <".$_POST['email'].">\r\n");
	if ($mailing) {
		echo "OK";
	}
?>