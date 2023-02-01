<?php
if(isset($_GET['status'])) {
} else {
header('Location:'.$_SERVER['PHP_SELF'].'?'.'status=Rick');
die;
}
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>Labs | RAYAN</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css'>
<link rel="stylesheet" href="./styllll2.css">
  </head>
  <body>
<!-- partial:index.partial.html -->
<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column is-3 is-flex">
          <div class="column-child sidebar shadow">
            <div class="sidebar-header has-text-centered"><br>
            <div class="photo"><img src="https://i.top4top.io/p_2288dn6ws4.jpg" width="290px"/></div>
              <h5>ريك دايم يكون ذكي و يكتشف الحل تقدر تكون اذكى  من ريك؟</h5>
            
             
              <div class="social-icons">
                <a href="https://twitter.com/i0i8x"><i class="fab fa-twitter icon"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-flex">
          <div class="column-child terminal shadow">
            <div class="terminal-bar dark-mode">
              <div class="icon-btn close"></div>
              <div class="icon-btn min"></div>
              <div class="icon-btn max"></div>
              <div class="terminal-bar-text is-hidden-mobile dark-mode-text">Root@RaYaN: ~</div>
            </div>
            <div class="terminal-window primary-bg" onclick="document.getElementById('dummyKeyboard').focus();">
              <div class="terminal-output" id="terminalOutput">
                <div class="terminal-line">
                  <span class="help-msg">Chall 1 — Clue : <span class="code">URL</span> </span>
                </div>
              </div>
              <div class="terminal-line">
  
                <?php
				if($_GET["status"]=='<script>javascript:alert(1)</script>')
    echo "<h1>The Flag is: FLAG{اكيد_اذكى_من_ريك}</h1>";
    
	if($_GET["status"]=='<image/src/onerror=prompt(8)>')
    echo "<h1>The Flag is: FLAG{اكيد_اذكى_من_ريك}</h1>";

if($_GET["status"]=='<svg/onload=prompt(8)>')
    echo "<h1>The Flag is: FLAG{اكيد_اذكى_من_ريك}</h1>";

if($_GET["status"]=='<script>alert(1)</script>')
    echo "<h1>The Flag is: FLAG{اكيد_اذكى_من_ريك}</h1>";

if($_GET["status"]=='<script>prompt()</script>')
    echo "<h1>The Flag is: FLAG{اكيد_اذكى_من_ريك}</h1>";

echo "<br>Value : ";
if(isset($_GET['status'])) {
$status =  $_GET['status'];
echo $status;
}
?>    
                   <br>
                <span class="success">انت</span> <span class="directory">تقدر ^_^</span> <span class="user-input" id="userInput"></span>
              </div>
            </div>
            <br>
            <button style="align:right;" class="button is-dark is-small"><a href="/">Home</a></button> | 
            <button style="align:right;" class="button is-dark is-small"><a href="2.php">Next Chall</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
      
    
</section>
<!-- partial -->
  <script src='https://use.fontawesome.com/releases/v5.3.1/js/all.js'></script><script  src="/src/script.js"></script>

</body>

</html>
