<?php
include 'IbParser.php';
	if(isset($_GET['password']))
	{
		$non_encrypted = trim($_GET['password']);
		$encrypted = base64_encode($non_encrypted);
		echo 'your encrypted password is: -->'.$encrypted.'<--';
		$decrypted = base64_decode($encrypted);
		echo 'your decrypted password is: -->'.$decrypted.'<--';
	}
?>