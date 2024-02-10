<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Last-Modified" content="20140719" />
<style>
body
{
  width : 100%;
  height:100%;
  margin:0;
  padding:0;
  background-color:#000000;
  color:#ffffff;
  font-family:Batang;
  font-size:12pt;
  overflow:hidden;
}
.base
{
  border:0px;
  width:100%;
  height:100%;
} 
</style>
<title>N</title>
<script language="JavaScript">

var n=0;
var m=0;
var h=36.7;
var c=28.4;
var x=1;
var y=0;

var tid0, tid1, tid2;

function Load() {
  A.src="20070919b.gif";
  A.style.cursor="pointer";
  x=0;
}

function Ar() {
  if(x==y) {
    A.src="20070919c.gif";
    A.style.cursor="default";
    tid0=setInterval("E0()", 500);
  }
}

function E0() {
  	console.log(n);
  if(n<10 & n==m) {
    n++;
    x=1;
    tid1=setInterval("E1()", 30);
    if(n==10) {
      clearInterval(tid0);
      y=1;
      setTimeout("tid2=setInterval('E2()', 30)", 2500);
    }
  }
}

function E1() {
  if(parseInt(Tb.style.height) >= n*h) {
  	FF[n-1].style.fontSize="32px";
  	FF[n-1].style.color="rgb(255, 255, 255)";
  	clearInterval(tid1);
  	m++;
  	return;
  }
  Tb.style.height = (parseInt(Tb.style.height) + 4) + "px";
  FF[n-1].style.fontSize=x*52/15;
  FF[n-1].style.color="rgb("+c*x+", "+c*x+", "+c*x+")";
  x++;
}

function E2() {
  if(y==20) {
    clearInterval(tid2);
    Tb.style.background="url(20070919a.gif) no-repeat";
  }
  P.style.fontSize=y*2;
  P.style.color="rgb("+c*y+", "+c*y+", "+c*y+")";
  P2.style.fontSize=y*30/7;
  P2.style.color="rgb("+c*y+", "+c*y+", "+c*y+")";
  y++;
}

</script>
</head>
<body onload="Load()">
<table class="base"><tr><td align="center">

<table border="0"><tr>
<td align="center">
<img src="20070919c.gif" id="A" onclick="Ar()">
</td><td colspan="3"></td></tr><tr><td valign="top">
<table style="border:1px solid #ffffff;height:4px" cellspacing="0" width="276" id="Tb"><tr><td></tr></td></table>
</td><td align="center" width="70">

<font class="F" style="font-size:0pt;color:#000000">２<BR></font>
<font class="F" style="font-size:0pt;color:#000000">０<BR></font>
<font class="F" style="font-size:0pt;color:#000000">０<BR></font>
<font class="F" style="font-size:0pt;color:#000000">７<BR></font>
<font class="F" style="font-size:0pt;color:#000000">&middot;<BR></font>
<font class="F" style="font-size:0pt;color:#000000">０<BR></font>
<font class="F" style="font-size:0pt;color:#000000">９<BR></font>
<font class="F" style="font-size:0pt;color:#000000">&middot;<BR></font>
<font class="F" style="font-size:0pt;color:#000000">１<BR></font>
<font class="F" style="font-size:0pt;color:#000000">９</font>


</td><td width="30"></td><td align="left">

<table border="0"><tr><td align="center">
<font id="P" style="font-size:0pt;color:#000000">Pandora's<BR><BR><font>
<font id="P2" style="font-size:0pt;color#000000;line-height:0.8;">B<BR>O<BR>X</font>
</td></tr></table>

</td></tr><tr height="49"><td colspan="4"></td></tr></table>

</td></tr></table>
<script>
FF=document.getElementsByClassName("F");
</script> 
</body>
</html>