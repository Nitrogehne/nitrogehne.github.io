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
var hue=0;
var color;
var rand;

function Start(){
  for(var i = 0; i < FF.length; i++)
  {
    hue=Math.floor(Math.random()*360);
    if(hue<60) { color=Math.floor(((hue)/60)*255); red=255;grn=color+(255-color)/3;blu=63; }
    else if(hue<120) { color=Math.floor(((hue-60)/60)*255); red=255-color+(255-color)/3;grn=255;blu=63; }
    else if(hue<180) { color=Math.floor(((hue-120)/60)*255); red=63;grn=255;blu=color+(255-color)/3; }
    else if(hue<240) { color=Math.floor(((hue-180)/60)*255); red=63;grn=255-color+(255-color)/3;blu=255; }
    else if(hue<300) { color=Math.floor(((hue-240)/60)*255); red=color+(255-color)/3;grn=63;blu=255; }
    else { color=Math.floor(((hue-300)/60)*255); red=255;grn=63;blu=255-color+(255-color)/3; }

    HH[i].style.height=Math.random()*30;
    FF[i].style.fontSize=Math.random()*20+20;
    FF[i].style.color="rgb("+Math.floor(red)+", "+Math.floor(grn)+", "+Math.floor(blu)+")";
  }
}

function RainbowColor(){
  hue=Math.floor(Math.random()*360);
  if(hue<60) { color=Math.floor(((hue)/60)*255); red=255;grn=color+(255-color)/3;blu=63; }
  else if(hue<120) { color=Math.floor(((hue-60)/60)*255); red=255-color+(255-color)/3;grn=255;blu=63; }
  else if(hue<180) { color=Math.floor(((hue-120)/60)*255); red=63;grn=255;blu=color+(255-color)/3; }
  else if(hue<240) { color=Math.floor(((hue-180)/60)*255); red=63;grn=255-color+(255-color)/3;blu=255; }
  else if(hue<300) { color=Math.floor(((hue-240)/60)*255); red=color+(255-color)/3;grn=63;blu=255; }
  else { color=Math.floor(((hue-300)/60)*255); red=255;grn=63;blu=255-color+(255-color)/3; }

  rand=Math.floor(Math.random()*FF.length);
  HH[rand].style.height=Math.random()*30;
  FF[rand].style.fontSize=Math.random()*20+20;
  FF[rand].style.color="rgb("+Math.floor(red)+", "+Math.floor(grn)+", "+Math.floor(blu)+")";
}
setInterval("RainbowColor()", 333)
</script>
</head>
<body onload="Start()">
<table class="base"><tr><td align="center">
<table border="0"><tr height="100">
<td align="center" valign="top" width="30"><table border="0"><tr class="H"><td></td></tr><td><font class="F" color="000000">2</font></td></tr></table></td>
<td align="center" valign="top" width="30"><table border="0"><tr class="H"><td></td></tr><td><font class="F" color="000000">0</font></td></tr></table></td>
<td align="center" valign="top" width="30"><table border="0"><tr class="H"><td></td></tr><td><font class="F" color="000000">0</font></td></tr></table></td>
<td align="center" valign="top" width="30"><table border="0"><tr class="H"><td></td></tr><td><font class="F" color="000000">7</font></td></tr></table></td>
<td align="center" valign="top" width="30"><table border="0"><tr class="H"><td></td></tr><td><font class="F" color="000000">.</font></td></tr></table></td>
<td align="center" valign="top" width="30"><table border="0"><tr class="H"><td></td></tr><td><font class="F" color="000000">0</font></td></tr></table></td>
<td align="center" valign="top" width="30"><table border="0"><tr class="H"><td></td></tr><td><font class="F" color="000000">9</font></td></tr></table></td>
<td align="center" valign="top" width="30"><table border="0"><tr class="H"><td></td></tr><td><font class="F" color="000000">.</font></td></tr></table></td>
<td align="center" valign="top" width="30"><table border="0"><tr class="H"><td></td></tr><td><font class="F" color="000000">2</font></td></tr></table></td>
<td align="center" valign="top" width="30"><table border="0"><tr class="H"><td></td></tr><td><font class="F" color="000000">5</font></td></tr></table></td>
</td></tr></table>
<table border="0"><tr>
<td width="65" valign="bottom"><marquee direction="left" behavior="alternate" scrollamount="1" scrolldelay="10"><font style="font-size:100pt">P</font></marquee></td>
<td width="63" valign="bottom"><marquee direction="right" behavior="alternate" scrollamount="1" scrolldelay="10"><font style="font-size:100pt">u</font></td>
<td width="56" valign="bottom"><marquee direction="left" behavior="alternate" scrollamount="1" scrolldelay="10"><font style="font-size:100pt">z</font></marquee></td>
<td width="57" valign="bottom"><marquee direction="right" behavior="alternate" scrollamount="1" scrolldelay="10"><font style="font-size:100pt">z</font></td>
<td width="25" valign="bottom"><marquee direction="left" behavior="alternate" scrollamount="1" scrolldelay="10"><font style="font-size:100pt">l</font></td>
<td width="55" valign="bottom"><marquee direction="right" behavior="alternate" scrollamount="1" scrolldelay="10"><font style="font-size:100pt">e</font></td>
</tr></table>
</td></tr></table>
<script>
FF=document.getElementsByClassName("F");
HH=document.getElementsByClassName("H");
</script> 
</body>
</html>