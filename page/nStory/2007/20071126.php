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

var n, Time=500, FTime;
var AFlag=0; Size=30, Wall=3;
var left, d=1, pos_x=0, pos_y=0;
var MM="";

function Start() {
	console.log(1);
  n=Math.floor(Math.random()*8)+3;
  FTime=Time/Math.sqrt(n);
  MakeMaze();
}

function MakeMaze() {
  FT.style.width=(Size*n+Wall*(n-1));
  FL.style.height=(Size*(n-2)+Wall*(n-1));

  MM="<table border=0 cellpadding=0 cellspacing=0 id=Maze>";
  for(i=0; i<n-1; i++) {
    MM+="<tr height="+Size+">";
    for(j=0; j<n-1; j++) {
      MM+="<td width="+Size+" align=center valign=middle id=S></td>";
      MM+="<td width="+Wall+" id=R></td>";
    }
    MM+="<td width="+Size+" align=center valign=middle id=S></td></tr>";

    MM+="<tr height="+Wall+">";
    for(j=0; j<n-1; j++) {
      MM+="<td id=C></td>";
      MM+="<td id=D></td>";
    }
    MM+="<td id=C></td></tr>";
  }
  MM+="<tr height=30>";
  for(j=0; j<n-1; j++) {
    MM+="<td align=center valign=middle id=S></td>";
    MM+="<td id=R></td>";
  }
  MM+="<td align=center valign=middle id=S></td></tr></table>";
  M.innerHTML=MM;
  S[0].innerHTML="→";

  for(i=0; i<R.length; i++) {
    if(Math.random()*10<4) {
      R[i].style.backgroundColor="rgb(255, 255, 255)";
      R[i].value=1;
    }
    else { R[i].value=0; }
  }
  for(i=0; i<C.length; i++) {
    if(Math.random()*10<4) {
      C[i].style.backgroundColor="rgb(255, 255, 255)";
      C[i].value=1;
    }
    else { C[i].value=0; }
  }
  for(i=0; i<D.length; i++) {
    c=0;
    if(R[i].value==1) { c++; }
    if(R[i+n-1].value==1) { c++; }
    if(C[i+Math.floor(i/(n-1))].value==1) { c++; }
    if(C[i+Math.floor(i/(n-1))+1].value==1) { c++; }
    if(c>=2) { D[i].style.backgroundColor="rgb(255, 255, 255)"; }
  }

  left=Math.floor(Math.random()*2);
  d=1;
  IOMaze(0);
}
function IOMaze(_a) {
  if(AFlag==0) {
    _a+=5;
    MF.style.filter="alpha(opacity="+_a+")";
    Maze.style.filter="alpha(opacity="+_a+")";
    
    if(_a>=100) { AFlag=1; F.innerHTML="Searching..."; setTimeout("FindWay()", FTime); }
    else { setTimeout("IOMaze("+_a+")", 50); }
  }
  else if(AFlag==1) {
    _a-=5;
    MF.style.filter="alpha(opacity="+_a+")";
    Maze.style.filter="alpha(opacity="+_a+")";
    
    if(_a<=0) { AFlag=0; setTimeout("Start()", 50); }
    else { setTimeout("IOMaze("+_a+")", 50); }
  }
}

function FindWay() {
  if(d>3) { d-=4; }

  if((left==1?d==0:d==3) && pos_x==0 && pos_y==0) { S[(pos_y*n+pos_x)].innerHTML="←";F.innerHTML="Retry"; setTimeout("IOMaze(100)", FTime); }
  else if(pos_x==n-1 && pos_y==n-1) { S[(pos_y*n+pos_x)].innerHTML="→"; F.innerHTML="Escape!"; }
  else {
    if(WallCheck(left==1?3:1)) {
      if(WallCheck(0)) {
        left==1?(d=(d+1)%4):(d=(d+3)%4);
        FindWay();
      }
      else {
        GoView();
      }
    }
    else {
      left==1?(d=(d+3)%4):(d=(d+1)%4);
      GoView();
    }
  }
}

function WallCheck(_d) {
  check=(d+_d)%4;
  if(check==0) { if(pos_y==0 || C[(pos_y*n+pos_x)-n].value==1) { return true; } }
  else if(check==1) { if(pos_x==n-1 || R[(pos_y*n+pos_x)-pos_y].value==1) { return true; } }
  else if(check==2) { if(pos_y==n-1 || C[(pos_y*n+pos_x)].value==1) { return true; } }
  else if(check==3) { if(pos_x==0 || R[(pos_y*n+pos_x)-pos_y-1].value==1) { return true; } }
  else { return false; }
}

function GoView() {
  S[pos_y*n+pos_x].innerHTML="";
  if(d==0) { pos_y--; S[pos_y*n+pos_x].innerHTML="↑"; }
  else if(d==1) { pos_x++; S[pos_y*n+pos_x].innerHTML="→"; }
  else if(d==2) { pos_y++; S[pos_y*n+pos_x].innerHTML="↓"; }
  else if(d==3) { pos_x--; S[pos_y*n+pos_x].innerHTML="←"; }

  setTimeout("FindWay()", FTime);
}
</script> 
</head>
<body onload="Start()">
<table class="base"><tr height="100"><td align="center" valign="top">
<font style="font-size:50pt">2007.11.26</font>
</td></tr><tr><td align="center">

<table border="0" cellpadding="0" cellspacing="0" id="MF" style="color:rgba(255,255,255,0)">
<tr height="3"><td width="3" bgcolor="ffffff"></td><td bgcolor="ffffff" id="FT"></td><td width="3" bgcolor="ffffff"></td></tr>
<tr height="30"><td></td><td rowspan="3" align="left" valign="top">
<div id="M" style="position:absolute"></div>
</td><td rowspan="2" bgcolor="ffffff"></td></tr>
<tr id="FL"><td rowspan="2" bgcolor="ffffff"><td id="S"></td></tr>
<tr height="30"><td id="S"></td></tr>
<tr height="3"><td colspan="3" bgcolor="ffffff"></td></tr>
</table>

</td></tr><tr height="100"><td align="center" valign="bottom">
<font id="F" style="font-size:50pt"></font>
</td></tr></table>
</body>
</html>