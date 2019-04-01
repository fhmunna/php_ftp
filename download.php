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

// try to download a file from server
if(ftp_get($conn_id, $localFilePath, $remoteFilePath, FTP_BINARY)){
    echo "File transfer successful - $localFilePath";
}else{
    echo "There was an error while downloading $localFilePath";
}

// close the connection
ftp_close($conn_id);




?>