<?php
// FTP server details
$ftp_host   = 'ftp.example.com';
$ftp_username = 'ftpuser';
$ftp_password = '*****';

// open an FTP connection
$conn_id = ftp_connect($ftp_host) or die("Couldn't connect to $ftp_host");

// login to FTP server
$ftp_login = ftp_login($conn_id, $ftp_username, $ftp_password);

// server file path
$file = 'public_html/index_old.php';

// try to delete file on server
if(ftp_delete($conn_id, $file)){
    echo "$file deleted successful";
}else{
    echo "There was an error while deleting $file";
}

// close the connection
ftp_close($conn_id);

?>