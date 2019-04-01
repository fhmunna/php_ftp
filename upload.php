<?php
// FTP server details
$ftp_host   = 'ftp.example.com';
$ftp_username = 'ftpuser';
$ftp_password = '*****';

// open an FTP connection
$conn_id = ftp_connect($ftp_host) or die("Couldn't connect to $ftp_host");

// login to FTP server
$ftp_login = ftp_login($conn_id, $ftp_username, $ftp_password);

// local & server file path
$localFilePath  = 'index.php';
$remoteFilePath = 'public_html/index.php';

// try to upload file
if(ftp_put($conn_id, $remoteFilePath, $localFilePath, FTP_ASCII)){
    echo "File transfer successful - $localFilePath";
}else{
    echo "There was an error while uploading $localFilePath";
}

// close the connection



?>