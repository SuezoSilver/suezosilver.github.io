<?PHP
header ('Content-Type: text/html; charset=big5');
include("forever_1.php");
echo ("<TABLE align='left'>");
error_reporting(0);
$IP = array("<font size=-1  color=#4e4e4e>登入伺服器" => "127.0.0.1:6900","<font size=-1 color=#4e4e4e>人物伺服器" => "127.0.0.1:5121","<font size=-1 color=#4e4e4e>地圖伺服器" => "127.0.0.1:6121",);
while(list($ServerName,$Host)=each($IP)) {
        list($IPAddress,$Port)=explode(":",$Host);
        echo("<TD><DIV>".$ServerName."</DIV></TD><TD>");
        if($fp=fsockopen($IPAddress,$Port,$ERROR_NO,$ERROR_STR,(float)0.5)) {
                echo("<DIV style=\"color:'#4e4e4e';font-weight:'bold';font size:'9pt'\">正常</DIV>");
                fclose($fp);
        }
        else {
                echo ("<DIV style=\"color:'#4e4e4e';font-weight:'bold';font size:'9pt'\">關機</DIV>");
        }
        echo ("</TD></TR><TR>");
};
?>
</td></tr></table></body></html>

