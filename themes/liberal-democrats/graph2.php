<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Australian Political Quiz - Results</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<?PHP 
$econ1=$_POST['govtsize']; 
$econ2=$_POST['ownership']; 
$econ3=$_POST['freetrade']; 
$econ4=$_POST['education']; 
$econ5=$_POST['labour']; 
$soc1=$_POST['drugs']; 
$soc2=$_POST['sex']; 
$soc3=$_POST['life']; 
$soc4=$_POST['war']; 
$soc5=$_POST['immigration']; 
$leftvar = (int) $econ1 + (int) $econ2 + (int) $econ3 + (int) $econ4 + (int)
$econ5; 
$topvar = (int) $soc1 + (int) $soc2 + (int) $soc3 + (int) $soc4 + (int) $soc5;

$xaxis = (int) $leftvar * 20 - 4;
$yaxis = (int) $topvar * 20 - 7;
?>

<style type="text/css">
.party {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	position:absolute;
	layer-background-color: #FF0000;
	border: 1px solid #000000;
	overflow: hidden;
	font-size: x-small;
	font-weight: bold;
	z-index: 2;
	background-color: #FFFFFF;
	padding: 2px;
}

.party:hover {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	position:absolute;
	layer-background-color: #FF0000;
	border: 1px solid #000000;
	overflow: hidden;
	font-size: x-small;
	font-weight: bold;
	z-index: 5;
	background-color: #FFFFCC;
	padding: 2px;
}
.explain {
	background-color: #FFFFFF;
	border: 1px solid #000000;
	position: absolute;
	height: 50px;
	width: 100px;
	visibility: hidden;
	z-index: 6;
	font-family: Arial, Helvetica, sans-serif;
	font-size: x-small;
	font-weight: bold;
	padding: 5px;
}
body {
	background-color: #FFCC33;
	margin: 0px;
	background-attachment: fixed;
	background-image: url(bar.jpg);
	background-repeat: no-repeat;
	background-position: left top;
}
.main {
	font-family: "Times New Roman", Times, serif;
	font-size: small;
	color: #000000;
	background-color: #FFFFFF;
	width: 400px;
	padding: 10px;
	margin: 10px 10px 20px 100px;
	border: 1px solid #000000;
	left: auto;
}

a {
	color: #000000;
	text-decoration: none;
}
</style>

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->
</script>
</head>
<body leftmargin="0" topmargin="0">
<div class="main">Your results in comparison to Australian Political Parties
  are shown below. Move your mouse over points to discover more about each party.
  Clicking their abbreviation will take you to the website of the party.</div>
<div id="Layer10" style="position:absolute; margin-top: 10px; left: 100; width:400; height:400; z-index:1; background-image: url(graph.gif); layer-background-image: url(graph.gif); border: 1px solid #000000;">
<div class="party" style="left: 316; top: 293; z-index: 6;" onMouseOver="MM_showHideLayers('LDP','','show')" onMouseOut="MM_showHideLayers('LDP','','hide')"><img src="pin.gif"><a href="http://yobbo.drivelwarehouse.com/ldp/" target="_blank">LDP</a></div>
<div class="explain" style="left: 206; top: 293;" id="LDP">The Liberal Democratic Party of Australia</div>
<div class="party" style="left: 236; top: 153;" onMouseOver="MM_showHideLayers('LIB','','show')" onMouseOut="MM_showHideLayers('LIB','','hide')"><img src="pin.gif">LIB</div>
<div class="explain" style="left: 286; top: 153;" id="LIB">The Australian Liberal Party</div>
<div class="party" style="left: 186; top: 203;" onMouseOver="MM_showHideLayers('ALP','','show')" onMouseOut="MM_showHideLayers('ALP','','hide')"><img src="pin.gif">ALP</div>
<div class="explain" style="left: 196; top: 233;" id="ALP">The Australian Labour Party</div>
<div class="party" style="left: 76; top: 253;" onMouseOver="MM_showHideLayers('GPA','','show')" onMouseOut="MM_showHideLayers('GPA','','hide')"><img src="pin.gif">GPA</div>
<div class="explain" style="left: 76; top: 283;" id="GPA">Green Party of Australia</div>
<div class="party" style="left: 216; top: 93;" onMouseOver="MM_showHideLayers('NAT','','show')" onMouseOut="MM_showHideLayers('NAT','','hide')"><img src="pin.gif">NAT</div>
<div class="explain" style="left: 266; top: 93;" id="NAT">Australian National Party</div>
<div class="party" style="left: 146; top: 123;" onMouseOver="MM_showHideLayers('ON','','show')" onMouseOut="MM_showHideLayers('ON','','hide')"><img src="pin.gif">ON</div>
<div class="explain" style="left: 36; top: 123;" id="ON">Pauline Hanson's One Nation</div>
<div class="party" style="left: -4; top: 273;" onMouseOver="MM_showHideLayers('SPA','','show')" onMouseOut="MM_showHideLayers('SPA','','hide')"><img src="pin.gif">SPA</div>
<div class="explain" style="left: -4; top: 303;" id="SPA">Australian Socialist Party</div>
<div class="party" style="left: 176; top: 53;" onMouseOver="MM_showHideLayers('CDP','','show')" onMouseOut="MM_showHideLayers('CDP','','hide')"><img src="pin.gif">CDP</div>
<div class="explain" style="left: 66; top: 53;" id="CDP">Christian Democratic Party</div>
<div class="party" style="left: 136; top: 233;" onMouseOver="MM_showHideLayers('DEM','','show')" onMouseOut="MM_showHideLayers('DEM','','hide')"><img src="pin.gif">DEM</div>
<div class="explain" style="left: 136; top: 263;" id="DEM">Australian Democrats</div>
<div class="party" style="left: <?php echo ($xaxis); ?>; top: <?php echo ($yaxis); ?>;"  onMouseOver="MM_showHideLayers('YOU','','show')" onMouseOut="MM_showHideLayers('YOU','','hide')"><img src="pin.gif">YOU!</div>
<div class="explain" style="left: 410; top: 200;" ID="YOU">Your Economic Freedom Score is <?php echo($leftvar);?>, and your social Freedom score is <?php echo($topvar);?></div>
</div>


</body>
</html>
