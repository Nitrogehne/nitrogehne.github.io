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
<script type="text/javascript">

var Time=1000, eTime;
var x, y, c;
var MM="";

function Start() {
  x=Math.floor(Math.random()*12+4); // 4~16
  y=Math.floor(Math.random()*6+3); // 3~9
  c=x*y+x+y;
  eTime=Time/Math.sqrt(x*y);
  
  MM="<table class=base>";
  for(i=0; i<y; i++) {
    MM+="<tr>";
    for(j=0; j<x; j++) {
      MM+="<td align=center valign=middle id=S></td>";
    }
    MM+="</tr>";
  }
  MM+="</table>";
  M.innerHTML=MM;

  Effect(0);
}

function Effect(_c) {
  _c++;
  S[Math.floor(Math.random()*S.length)].style.backgroundColor="rgb("+Math.floor(Math.random()*128+128)+", "+Math.floor(Math.random()*128+128)+", "+Math.floor(Math.random()*128+128)+")";
  if(_c<c) { setTimeout("Effect("+_c+")", eTime); }
  else { setTimeout("Return("+(x>y?(Math.floor(Math.random()*2)):x==y?(Math.floor(Math.random()*4)):(Math.floor(Math.random()*2)+2))+", -1)", eTime); }
}

function Return(_type, _c) {
  _c++; f=1;
  if(_type==0 && _c<x) {
    for(i=0; i<y; i++) {
      S[i*x+_c].style.backgroundColor="rgb(0, 0, 0)";
    }
  }
  else if(_type==1 && _c<x) {
    for(i=0; i<y; i++) {
      S[i*x+x-_c-1].style.backgroundColor="rgb(0, 0, 0)";
    }
  }
  else if(_type==2 && _c<y) {
    for(i=0; i<x; i++) {
      S[_c*x+i].style.backgroundColor="rgb(0, 0, 0)";
    }
  }
  else if(_type==3 && _c<y) {
    for(i=0; i<x; i++) {
      S[(y-_c-1)*x+i].style.backgroundColor="rgb(0, 0, 0)";
    }
  }
  else { f=0; setTimeout("Start()", eTime); }

  if(f==1) { setTimeout("Return("+_type+", "+_c+")", eTime); }
}
</script> 
</head>
<body onload="Start()">
<div style="position:absolute;left:0px:top:0px;width:100%;height:100%;z-index:10">
<table class="base"><tr><td align="center" valign="middle">
<font style="color:#000000;font-size:50pt"><B>2007.11.28</B></font><BR>
<BR>
<BR>
<font style="color:#000000;font-size:100pt"><B>Super<BR>Computer</B></font>
</td></tr></table>
</div>
<table class="base"><tr><td align="center" valign="middle">
<div id="M" style="position:relative;z-index:1;width:100%;height:100%;"></div>
</td></tr></table>
</body>
</html>