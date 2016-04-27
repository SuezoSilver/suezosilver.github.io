<?PHP
$dbHost = "localhost";	//數據庫地址
$dbName = "stro";	//RO數據庫
$dbUser = "Suezo";		//數據庫帳號
$dbPasswd = "C40G907SOO0U";	//數據庫密碼
//$dbConid=$connect;
$connect=mysql_pconnect($dbHost,$dbUser,$dbPasswd)or die("無法連接數據庫！");
mysql_select_db($dbName)or die("數據庫名可能有誤！");

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