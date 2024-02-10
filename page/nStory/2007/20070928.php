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

var TTT=new Array();
TTT[0]='게으름';  TTT[1]='창의력';  TTT[2]='응용';    TTT[3]='변덕';    TTT[4]='집중력';
TTT[5]='가식';    TTT[6]='보안';    TTT[7]='잠';      TTT[8]='소심함';  TTT[9]='외로움';
TTT[10]='의외성'; TTT[11]='우울';   TTT[12]='논리';   TTT[13]='자신감'; TTT[14]='운';
TTT[15]='금전';   TTT[16]='재능';   TTT[17]='사악함'; TTT[18]='책임감'; TTT[19]='죄책감';
TTT[20]='추억';   TTT[21]='개념';   TTT[22]='현실성'; TTT[23]='정신력'; TTT[24]='소유욕';
TTT[25]='절제';   TTT[26]='실수';   TTT[27]='식욕';   TTT[28]='여유';   TTT[29]='소속감';
TTT[30]='비밀';   TTT[31]='상상';   TTT[32]='목표';   TTT[33]='청결';   TTT[34]='다정함';
TTT[35]='도박';   TTT[36]='지식';   TTT[37]='신경질'; TTT[38]='고민';   TTT[39]='예의';
TTT[40]='무념';   TTT[41]='폐쇄적'; TTT[42]='계산적'; TTT[43]='관찰력'; TTT[44]='후회';
TTT[45]='계획성'; TTT[46]='융통성'; TTT[47]='믿음';   TTT[48]='의지';   TTT[49]='활발';
TTT[50]='생활력'; TTT[51]='한숨';   TTT[52]='이기적'; TTT[53]='배려';   TTT[54]='공포감';
TTT[55]='과학적'; TTT[56]='결정력'; TTT[57]='양심';   TTT[58]='어울림'; TTT[59]='이중성';
TTT[60]='애착';   TTT[61]='아쉬움'; TTT[62]='과시';   TTT[63]='모험';   TTT[64]='배신';
TTT[65]='겁';     TTT[66]='건강';   TTT[67]='결론';   TTT[68]='공허함'; TTT[69]='편안함';
TTT[70]='장난';   TTT[71]='집착';   TTT[72]='인내';   TTT[73]='막연함'; TTT[74]='조심성';
TTT[75]='이해';   TTT[76]='진지함'; TTT[77]='분노';   TTT[78]='어두움'; TTT[79]='호기심';
TTT[80]='걱정';   TTT[81]='심술';   TTT[82]='착각';   TTT[83]='희생';   TTT[84]='봉사';
TTT[85]='관심';   TTT[86]='의문';   TTT[87]='아부';   TTT[88]='신용';   TTT[89]='비극';
TTT[90]='행복';   TTT[91]='귀찮음'; TTT[92]='의식';   TTT[93]='기록';   TTT[94]='기억력';
TTT[95]='대처';   TTT[96]='분석';   TTT[97]='적기';   TTT[98]='질투';   TTT[99]='감사';
var PPP=new Array();
PPP[0]=78;  PPP[1]=81;  PPP[2]=89;  PPP[3]=85;  PPP[4]=74;
PPP[5]=39;  PPP[6]=98;  PPP[7]=83;  PPP[8]=74;  PPP[9]=87;
PPP[10]=64; PPP[11]=88; PPP[12]=49; PPP[13]=67; PPP[14]=77;
PPP[15]=30; PPP[16]=80; PPP[17]=28; PPP[18]=69; PPP[19]=50;
PPP[20]=40; PPP[21]=65; PPP[22]=39; PPP[23]=23; PPP[24]=89;
PPP[25]=85; PPP[26]=77; PPP[27]=77; PPP[28]=83; PPP[29]=34;
PPP[30]=94; PPP[31]=83; PPP[32]=10; PPP[33]=40; PPP[34]=68;
PPP[35]=15; PPP[36]=41; PPP[37]=33; PPP[38]=75; PPP[39]=72;
PPP[40]=83; PPP[41]=79; PPP[42]=93; PPP[43]=78; PPP[44]=87;
PPP[45]=65; PPP[46]=21; PPP[47]=5;  PPP[48]=42; PPP[49]=21;
PPP[50]=50; PPP[51]=88; PPP[52]=64; PPP[53]=78; PPP[54]=81;
PPP[55]=89; PPP[56]=37; PPP[57]=91; PPP[58]=58; PPP[59]=78;
PPP[60]=84; PPP[61]=76; PPP[62]=79; PPP[63]=47; PPP[64]=3;
PPP[65]=88; PPP[66]=60; PPP[67]=1;  PPP[68]=76; PPP[69]=43;
PPP[70]=64; PPP[71]=79; PPP[72]=64; PPP[73]=75; PPP[74]=50;
PPP[75]=84; PPP[76]=37; PPP[77]=31; PPP[78]=87; PPP[79]=86;
PPP[80]=85; PPP[81]=46; PPP[82]=79; PPP[83]=64; PPP[84]=10;
PPP[85]=57; PPP[86]=74; PPP[87]=85; PPP[88]=81; PPP[89]=80;
PPP[90]=33; PPP[91]=88; PPP[92]=76; PPP[93]=87; PPP[94]=31;
PPP[95]=64; PPP[96]=60; PPP[97]=54; PPP[98]=23; PPP[99]=75;
var PM=new Array();
PM[0]=20;   PM[1]=13;   PM[2]=30;   PM[3]=13;   PM[4]=22;
PM[5]=31;   PM[6]=11;   PM[7]=33;   PM[8]=13;   PM[9]=60;
PM[10]=27;  PM[11]=54;  PM[12]=25;  PM[13]=22;  PM[14]=44;
PM[15]=20;  PM[16]=6;   PM[17]=72;  PM[18]=26;  PM[19]=40;
PM[20]=2;   PM[21]=19;  PM[22]=20;  PM[23]=22;  PM[24]=11;
PM[25]=10;  PM[26]=7;   PM[27]=13;  PM[28]=12;  PM[29]=16;
PM[30]=4;   PM[31]=10;  PM[32]=30;  PM[33]=38;  PM[34]=32;
PM[35]=20;  PM[36]=49;  PM[37]=54;  PM[38]=25;  PM[39]=21;
PM[40]=15;  PM[41]=21;  PM[42]=2;   PM[43]=22;  PM[44]=34;
PM[45]=24;  PM[46]=6;   PM[47]=40;  PM[48]=42;  PM[49]=78;
PM[50]=18;  PM[51]=8;   PM[52]=25;  PM[53]=13;  PM[54]=20;
PM[55]=6;   PM[56]=16;  PM[57]=4;   PM[58]=18;  PM[59]=13;
PM[60]=11;  PM[61]=21;  PM[62]=15;  PM[63]=22;  PM[64]=2;
PM[65]=18;  PM[66]=17;  PM[67]=0;   PM[68]=12;  PM[69]=24;
PM[70]=32;  PM[71]=21;  PM[72]=36;  PM[73]=9;   PM[74]=35;
PM[75]=6;   PM[76]=20;  PM[77]=40;  PM[78]=13;  PM[79]=11;
PM[80]=4;   PM[81]=11;  PM[82]=26;  PM[83]=26;  PM[84]=7;
PM[85]=41;  PM[86]=24;  PM[87]=11;  PM[88]=5;   PM[89]=20;
PM[90]=28;  PM[91]=4;   PM[92]=13;  PM[93]=7;   PM[94]=21;
PM[95]=22;  PM[96]=29;  PM[97]=34;  PM[98]=10;  PM[99]=20;

var rand=new Array();
rand[0]=-1; rand[1]=-1; rand[2]=-1;
var rand_t=0;
var v=new Array()
v[0]=50; v[1]=50; v[2]=50;
var v_t;
var re=20, c=1, c_t, rand_f=1, color, fl;
function Start() {
  for(var i=0; i<TT.length; i++) {
    TT[i].style.color=PP[i].style.color="rgb(223, 95, 223)";
  }
  Random();
}
function Random() {
  re--;
  TT[c-1].innerHTML=TTT[Math.floor(Math.random()*TTT.length)];
  PP[c-1].innerHTML=Math.floor(Math.random()*99)+1+"%";
  if(re>0 || Math.random()*25<1) { setTimeout("Random()", 77); }
  else {
    re=30;
    Next();
  }
}

function Next() {
  rand_f=1;
  rand_t=rand[c-1];
  v_t=v[c-1];
  c_t=c-1;
  while(rand_f){
    rand[c-1]=Math.floor(Math.random()*TTT.length);
    rand_f=0;
    for(var i=0; i<TT.length-1; i++) {
      if(rand[c-1]==rand[(c+i)%TT.length]) { rand_f=1; }
    }
    if(rand[c-1]==rand_t) { rand_f=1; }
  }
  TT[c-1].innerHTML=TTT[rand[c-1]];
  if(Math.random()*2<1) { v[c-1]=PPP[rand[c-1]]+Math.floor(Math.random()*PM[rand[c-1]]); }
  else { v[c-1]=PPP[rand[c-1]]-Math.floor(Math.random()*PM[rand[c-1]]); }
  if(v[c-1]<1) { v[c-1]=1; } else if(v[c-1]>99) { v[c-1]=99; }
  PP[c-1].innerHTML=v[c-1]+"%";
  fl=5;
  Color();
  c++;
  if(c>TT.length) { c=1; f=0 }
  setTimeout("Random()", 500);
}

function Color() {
  if(fl>0) { fl--; }
  else if(v_t<v[c_t]) { v_t++; } else if(v_t>v[c_t]) { v_t--; }
  if(v_t<50) {
    r=255-(v_t*32/50);
    g=63+(v_t*128/100);
    b=63+(v_t*160/50);
  }
  else {
    r=383-(v_t*160/50);
    g=63+(v_t*128/100);
    b=191+(v_t*32/50);
  }
  if(fl>0) { TT[c_t].style.color=PP[c_t].style.color="rgb(255, 255, 255)"; }
  else { TT[c_t].style.color=PP[c_t].style.color="rgb("+Math.floor(r)+", 95, "+Math.floor(b)+")"; }
  if(v_t!=v[c_t] || fl>0) { setTimeout("Color()", 20); }
}

</script> 
</head>
<body onload="Start()">
<table class="base"><tr><td align="center">
<table border="0">
<tr height="110"><td rowspan="3" align="center" style="writing-mode:tb-rl">
<font style="font-size:30pt">2007 / 09 / 28</font></td>

<td width="180" align="center"><font style="font-size:30pt"><span id="T"></span></font></td>
<td align="center" width="150"><font style="font-size:30pt"><span id="P"></span></font></td>
<td rowspan="3" width="40"></td></tr>

<tr height="110"><td align="center"><font style="font-size:30pt"><span id="T"></span></font></td>
<td align="center"><font style="font-size:30pt"><span id="P"></span></font></td></tr>

<tr height="110"><td align="center"><font style="font-size:30pt"><span id="T"></span></font></td>
<td align="center"><font style="font-size:30pt"><span id="P"></span></font></td></tr>

</table>
</td></tr></table>
<script>
TT=document.all["T"];
PP=document.all["P"];
</script> 
</body>
</html>