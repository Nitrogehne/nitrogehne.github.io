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
var c = new Array()
c[0]=0; c[1]=0; c[2]=0; c[3]=0; c[4]=0; c[5]=0; c[6]=0; c[7]=0;
var i=0, j=0, flag=0, randT=0;
var str='20071016';
var cc=255;
var i_strength=0, r_strength=0;
var timer;
function Start() {
  for(i=0; i<8; i++) {
    FF[i].style.color="rgb(127, 127, 127)";
  }
  Random();
}

function Random() {
  j++;
  for(i=0; i<8; i++) {
    if(c[i]==0) {
      randT=Math.floor(Math.random()*30)+1;
      TT[i].style.width=randT;
      FF[i].innerHTML=Math.floor(Math.random()*10);
      if(Math.random()*10<1 && j>10) {
        FF[i].innerHTML=str.charAt(i);
        FF[i].style.color="rgb(255, 255, 255)";
        c[i]=randT;
        j=7;
      }
    }
  }
  
  for(flag=1, i=0; i<8; i++) {
    if(c[i]==0) { flag=0; }
  }
  if(flag==0) {
    setTimeout("Random()", 55);
  }
  else {
    j=0;
    setTimeout("ChangeColor()", 1000);
  }
}

function ChangeColor() {
  cc-=10;
  if(cc>0) {
    for(i=0; i<8; i++) {
      FF[i].style.color="rgb(255, "+cc+", "+cc+")";
    }
    B.style.color="rgb("+cc+", "+cc+", "+cc+")";
    setTimeout("ChangeColor()", 55);
  }
  else {
    Vibration();
    Fire();
  }
}

function Fire(){
  clearTimeout(timer);
  r_strength=10+Math.floor(Math.random()*15);
  moreFire();
}

function moreFire() {
  if(i_strength<r_strength) {
    B.style.textShadow="0 0 "+i_strength+"px #f00";
    i_strength+=1;
    timer = setTimeout("moreFire()", 50);
  }
  else {
    clearTimeout(timer);
    r_strength=3+Math.floor(Math.random()*7);
    lessFire();
  }
}

function lessFire() {
  if(i_strength>r_strength) {
    B.style.textShadow="0 0 "+i_strength+"px #f00";
    i_strength-=1;
    timer = setTimeout("lessFire()", 50);
  }
  else {
    clearTimeout(timer);
    r_strength=10+Math.floor(Math.random()*15);
    moreFire();
  }
}

function Vibration() {
  for(i=0; i<8; i++) {
    if((i+j)%2==0) { TT[i].style.width=c[i]+1; }
    else { TT[i].style.width=c[i]-1; }
  }
  j=(j+1)%2;
  setTimeout("Vibration()", 50);
}
</script> 
</head>
<body onload="Start()">
<table class="base"><tr><td align="center">
<table border="0"><tr>
<td align="left" width="70">
<table border="0"><tr height="50"><td id="T"></td><td align="left" valign="top"><font id="F" style="font-size:30pt;position:absolute"></font></td></tr></table>
<table border="0"><tr height="50"><td id="T"></td><td align="left" valign="top"><font id="F" style="font-size:30pt;position:absolute"></font></td></tr></table>
<table border="0"><tr height="50"><td id="T"></td><td align="left" valign="top"><font id="F" style="font-size:30pt;position:absolute"></font></td></tr></table>
<table border="0"><tr height="50"><td id="T"></td><td align="left" valign="top"><font id="F" style="font-size:30pt;position:absolute"></font></td></tr></table>
<table border="0"><tr height="30"><td></td><td></td></tr></table>
<table border="0"><tr height="50"><td id="T"></td><td align="left" valign="top"><font id="F" style="font-size:30pt;position:absolute"></font></td></tr></table>
<table border="0"><tr height="50"><td id="T"></td><td align="left" valign="top"><font id="F" style="font-size:30pt;position:absolute"></font></td></tr></table>
<table border="0"><tr height="30"><td></td><td></td></tr></table>
<table border="0"><tr height="50"><td id="T"></td><td align="left" valign="top"><font id="F" style="font-size:30pt;position:absolute"></font></td></tr></table>
<table border="0"><tr height="50"><td id="T"></td><td align="left" valign="top"><font id="F" style="font-size:30pt;position:absolute"></font></td></tr></table>
</td><td width="30"></td>
<td align="left" valign="middle" width="500">
<table border="0" width="30" height="180"><tr><td align="right" valign="top">
<span id="B" style="font-size:130pt;position:absolute">Burn</span>
</td></tr></table>
</td></tr></table>

<script>
TT=document.all["T"];
FF=document.all["F"];
</script> 
</body>
</html>