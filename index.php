<DOCTYPE HTML>
    <html>
        <!--WEB MASTER UĞUR KORKMAZ-->
        <head>
    <title>SUVARİ OFFİCAL &COPY 2017 BOT | TÜRK</title>
            <!--CSS TASARIM-->
    <link rel="shortcut icon" href="icon.ico" />
    <link rel="stylesheet" href="style.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--FOR SUVARİ BOT FACEBOOK-->  
   <meta property="og:title" content="İstediğin Yorumu Atan Facebook Botu">
   <meta property="og:url" content="http://suvari.herokuapp.com/">
   <meta property="og:url" content="http://suvari-bot.tk/">
   <meta property="og:type" content="website">
   <meta property="og:image" content="http://i.hizliresim.com/B8z8jL.png">
   <meta property="og:description" content="İstediğin yorumu atan bot,Reklamsız Bot,facebook v4 yorum ve like botu">
   <meta property="article:author" content="https://www.facebook.com/uu.korkmaz">
   
        </head>
        <body>
         
        <a href="#top" id="back-to-top" style="display: inline;"></a>
         <div class="navbar">
             <center>
             <a href="#tops"><input type="button"class="ibuton"value=" GİRİŞ YAP"></input></a>
             <a href="#about"><input type="button"class="ibuton"value=" HAKKIMIZDA"></input></a>
             <a href="http://fb.com/suvaris.tim"><input type="button"class="ibuton"value=" FB SAYFASI"></input></a>
            </center>
             </div>
             <br>
             <br>
             <br>
            <center>SUVARİ OFFİCAL &COPY 2017 BOT</center>
          <hr style="width:80%;background-color:whitesmoke;border-radius:50%;">
          <br><center>
              

         <table border="0" width="60%">
             <td>
                 <center>UĞUR KORKMAZ</center><hr style="width:80%;color:#37485C;">
                <center> <a href="http://fb.com/uu.korkmaz"><img src="https://graph.facebook.com/100006915270951/picture" alt="Uğur korkmaz"></img></a></center>
             <hr style="width:80%;color:#37485C;">
             <center><div class="fb-follow" data-href="https://www.facebook.com/uu.korkmaz" data-layout="button" data-size="small" data-show-faces="true"></div></center>
             </td>
              
             <td>
                 <center>BEKİR CANİK</center><hr style="width:80%;">
                <center> <a href="http://fb.com/00004734766022"><img src="https://graph.facebook.com/100004734766022/picture" alt="Bekir Canik"></img></a></center>
                 
             <hr style="width:80%;color:#37485C;"> 
             <center><div class="fb-follow" data-href="https://www.facebook.com/crazyb0yy" data-layout="button" data-size="small" data-show-faces="true"></div></center>
             </td>
              
              <td>
                  <center>BARIŞ BAĞIŞ</center><hr style="width:80%;">
                <center>  <a href="http://fb.com/00005488570972"><img src="https://graph.facebook.com/100005488570972/picture" alt="Barış Bağış"style=""></img></a></center>
                  
                 <hr style="width:80%;color:#37485C;">
              <center><div class="fb-follow" data-href="https://www.facebook.com/Turk.Hacker.TV" data-layout="button" data-size="small" data-show-faces="true"></div></center>
             </td>
            
             </table>
             <hr style="width:80%;background-color:whitesmoke;border-radius:50%;">
         <div class="acıkm">   
        <font color="white">
		 <br></br>
    Token Alma<br>
        <img src="token.png" style="width:50%;"></img>
          <br></br>  Resimdeki gibi tokeni kopyalayın !<br></br>
        Ardından kutucuğa yapıştırın .<br></br>
        </div>
        
        
        
        </font>


           
         
          <center>
		  <!--BOT SCRİPT FOR SUVARi-->

		  <?php
session_start();
error_reporting(0);
$bot=new bot();

class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $tokn[]=$b.'='.$c;
}
$true='?'.implode('&',$tokn);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION BY  suvari',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('tokn')){
        mkdir('tokn');
}
if($bb){
$blue=fopen('tokn/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("Yorum Kayıt Edildi !")</script>';
}else{
        if($z){
if(file_exists('tokn/'.$id)){
$file=file_get_contents('tokn/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('tokn/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('tokn/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('tokn/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('tokn/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('tokn/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("Sistem Veri Tabanına Token Kayıt Edildi !\nBot Başlatılıyor...")</script>';}}
}

public function lOgbot($d){
        unlink('tokn/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("Bot Çıkış Başarılı !")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('tokn/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like Add Comment';
}else{
        $satu='off';
        $ak='Just Like';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot Emo';
}else{
        $dua='off';
        $ik='Bot Manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered On';
}else{
        $tiga='off';
        $ek='Powered Off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text Via Script';
}else{
        $empat='off';
        $uk='Text Via Self';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<ul>
<br>
Hoşgeldin<font color="red">'.$nm.'</font></br>
<br>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></br>
<br>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></br>
<br>
<form action="index.php" method="post">
Select Menu Robot :</br>
<br>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Just Like</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like Add Comment</option>
</select>';
}
echo'</br>
<br>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot Manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot Emo</option>
</select>';
}
echo'</br>
<br>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered Off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered On</option>
</select>';
}
echo'</br>
<br>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Text Via Self</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Replace Your Text
</option>
<option value="on">
Text Via Script</option>
</select>';
        }else{
        echo'
Kendi Yorumunu Oluştur ...
<br>
<input type="text" class="input" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</br>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="Save"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"December"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
</h1>
<h2 class="description">
<b>

</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
<div class="post-content">

<center></head>
    <body>
        <div id="main">
            <div id="content">
                <div class="header">
<span class="mfss fcg">
</span>
</div></center><br>
<span>
<br>
</span>
</div>

<div class="post-meta2">
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
</span>
</div></center><a id="tops"></a><br>
<center>
<center><a href="htc_sense.php" target="blank">UYGULAMAYA İZİN VER</a></center>
<br><a href="token_al.php" target="blank">TOKEN AL</a></center>
<center>
<ul>
</center>
<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="input" type="text" style="height:28px;" name="token"> <input class="submit" type="submit" style="height:28px;" value="Submit"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('tokn')){
        mkdir('tokn');
}
$up=opendir('tokn');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
Aktif Bot <font color="white">'.count($user).'</font>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('tokn/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Token Hatalı !\nTekrar Token Al")</script>';
        unset($_SESSION[key]);
        unlink('tokn/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Token Hatalı !\nTekrar Token Al")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
		  
		  
          <!--BOT SCRİPT SON FOR SUVARİ-->
<header class="son">
    
    </center><br>
	<div class="son-artık">
	<hr style="background-color:white;width:60%;">
    <center><font color="white">SUVARİ BOT &COPY BOT 2017 ALL RESERVED</center>
	<hr style="background-color:white;width:60%;">
	</div>
    

</header>
      </font>
      </center>

        </body>
		<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.8&appId=533027876890139";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    </html>
    
    
