<?php
error_reporting( E_ALL );
require( 'IbParser.php' );
$parser = new IbParser();
$bank   = 'BCA';
$user   = 'your_klikbca_username';
//encoded password
$pass   = 'your_bca_password_base64';
$pass_decrypted = base64_decode($pass);
$balance = $parser->getBalance( $bank, $user, $pass_decrypted );
?>
<pre>
Akun          : <?php echo $bank . ' ' . $user; ?>

Saldo         : <?php echo ( !$balance )? 'Gagal mengambil saldo': number_format( $balance, 2 ); ?>
</pre>

<?php $transactions = $parser->getTransactions( $bank, $user, $pass ); ?>
<pre>Transaksi     : <?php echo ( !$transactions )? 'Gagal mengambil transaksi': print_r( $transactions, true ); ?></pre>

