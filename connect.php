<?php
// FTP server details
$ftp_host   = 'ftp.example.com';
$ftp_username = 'ftpuser';
$ftp_password = '*****';

// open an FTP connection
$conn_id = ftp_connect($ftp_host) or die("Couldn't connect to $ftp_host");

// try to login
if(@ftp_login($conn_id, $ftp_username, $ftp_password)){
    echo "Connected as $ftp_username@$ftp_host";
}else{
    echo "Couldn't connect as $ftp_username";
}

// close the connection
ftp_close($conn_id);



?>