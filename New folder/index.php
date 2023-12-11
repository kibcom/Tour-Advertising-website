<html >
<head>
<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/image.20.jpg"
demo2 = new Image();
demo2.src="images/image/30.jpg"
demo3 = new Image();
demo3.src="images/image/40.jpg"


demo4 = new Image();
demo4.src="images/image/50.jpg"
demo5 = new Image();
demo5.src="images/image/60.jpg" 
demo6= new Image();
demo6. src="images/image/70.jpg"
demo7=new Image();
demo7.src="images/imag/80.jpg"
}
function timeimgs(numb) {  // Reusable timer
thetimer = setTimeout("imgturn('" +numb+ "')", 2000);
}

function imgturn(numb) {   // Reusable image turner
if (document.images) {

if (numb == "7") {         // This will loop the image
document["demo"].src = eval(".src");
timeimgs('1');
}

else {
document["demo"].src = eval("demo" + numb + ".src");

timeimgs(numb = ++numb);
}
}
}

</script>
<title>CAR ONLINE SHOPPING</title>
<link style="text/css" href="s.css" rel="stylesheet">
</head>
<body onLoad="timeimgs('10');" >
<table  width="1000" id="table1" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;">
 <tr><td bgcolor=#c53b1c size=30px><p><b>WEL COME TO CAR ONLINE SHOPPING<b></p></td></tr>
<tr>
<td width="900"><img src="images/image/tt.PNG" height="100" width="900"></td>
</tr>
<tr>
<td  valign="top"   width="500">
    <div id="topnav">
	<li><a href="index.php">Home</a></li>
<li style="padding-left:470px"><a href="login.php">login</a>|</li>
<td  valign="top"   width="500">
  <li style="padding-left:470px"><a href="index.php">back</a>|<a href="bus.php">next</a>|</li>
 </td>
  <li></div> 
  </td>
  </tr>
</table>
 <table  width="930" id="table1" style="border-bottom:1px solid #f6b45f;margin-top:0.5%;">
 
<tr>
<td  valign="top" height="450" width="550" bgcolor=#AA3AAAA id="menu-bar"> 

	<a href="bus.php">Bus</a>
   <a href="hammer.php">Hammer</a>
    <a href="hyundai.php">Hyundai</a>
	<a href="photo.php">Photo Gallary</a>
	<a href="product.php">PRODUCT </a>
		<a href="group.html">group members </a>
			<fieldset><legend>No of Visister</legend>	
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
	
</td>
  
 <td>
<table border=0 width="500"  style="border-bottom:1px solid #f6b45f" >
<tr><td bgcolor="green" height="30px"> well come to home page</td>
<td></td></tr>
<tr>
<td border=0 valign="top" height="200"  width="100"> 
<img src="images/image/bu5.jpg" height="300" width="520" name="demo" align="middle">
</td>
</tr>
</table>
<td border="0" height="450" width="200" bgcolor=#AA3AAAA> 

<img src="images/image/ho26.jpg" height="200" width="200" name="demo" align="middle">
<td border=1 align="right"height="2"  colspan=3 > 

<font color=white ><p>phone:0928453133</p>
<font color=white ><p>pox:8100</p>
<font color=white ><p>Email:enyew@gmail.com</p>
</td>
  </td>
</tr>  
<tr>
<td border=1 align="center"height="2"  colspan=3 > 
<font color=white ><p>CAR ONLINE SHOPPING&copy; 2007 COPY RIGHT RESERVED.</p>
</td>
</tr>
</table>
</body>
</html>



  
  







