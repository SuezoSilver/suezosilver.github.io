<?PHP
$dbHost = "localhost";	//�ƾڮw�a�}
$dbName = "stro";	//RO�ƾڮw
$dbUser = "Suezo";		//�ƾڮw�b��
$dbPasswd = "C40G907SOO0U";	//�ƾڮw�K�X
//$dbConid=$connect;
$connect=mysql_pconnect($dbHost,$dbUser,$dbPasswd)or die("�L�k�s���ƾڮw�I");
mysql_select_db($dbName)or die("�ƾڮw�W�i�঳�~�I");

function URL_Refresh($url) {
print "<html><head><META HTTP-EQUIV=Refresh charset=big5 CONTENT=\"0;url='$url'\"></head></html>";
}

function isAlNum($str) {
if(eregi("[^0-9a-zA-Z]",$str)) return 0;
return 1;
}

function ismail( $str ) {
if( eregi("([a-z0-9\_\-\.]+)@([a-z0-9\_\-\.]+)", $str) ) return true;
else return false; 
}
?>