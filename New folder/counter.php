<?php
$count =$_COOKIE['visits'];
if($count==""){
$count=1;}
else{
$count++;
}
setcookie("visits",$count);?>
<html><head><title>setting cookies</title></head>
<body bgcolor="25383c">
<font size=+1 face="arial">
<h2><font color="red">count visitor</font><font color="green"></h2>you are visit</font></label>
<?php echo $count;?>
<br/> </body></html></fieldset>
</table><br><div id="q">
