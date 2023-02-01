<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>Labs | RAYAN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css'>
<link rel="stylesheet" href="./styl4.css">
  </head>
  <body>

<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column is-3 is-flex">
          <div class="column-child sidebar shadow">
            <div class="sidebar-header has-text-centered"><br>
            <div class="photo"><img src="https://c.top4top.io/p_25213etre1.jpg" width="450px"/></div>
              <h5>!!باتمان فقد الذاكرة</h5>
             <h5>لكن يتذكر انه كان يعيش في مدينة يحتاج منك تذكيرة بأسم المدينة تستطيع فعلها؟؟</h5>
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
                  <span class="help-msg">Chall 2 — Clue : <span class="code">City</span> </span>
                </div>
              </div>
              <div class="terminal-line">
                  <br>
                <?php
				
				

if (isset($_POST['fname'])) {

if($_POST["fname"]=='<script>javascript:alert(1)</script>')
    echo "<h1>The Flag is: FLAG{مدينة_قوثام}</h1>";

if($_POST["fname"]=='<image/src/onerror=prompt(8)>')
    echo "<h1>The Flag is: FLAG{مدينة_قوثام}</h1>";

if($_POST["fname"]=='<svg/onload=prompt(8)>')
    echo "<h1>The Flag is: FLAG{مدينة_قوثام}</h1>";

if($_POST["fname"]=='<script>alert(1)</script>')
    echo "<h1>The Flag is: FLAG{مدينة_قوثام}</h1>";

if($_POST["fname"]=='<script>prompt()</script>')
    echo "<h1>The Flag is: FLAG{مدينة_قوثام}</h1>";

    echo "<div style=\"text-align:left;font-size:1em;color:#00b3b3;\">Hello, " . $_POST['fname'] . "</div>";

}
else{

    echo '<form name="myForm" action="2.php" onsubmit="return validateForm()" method="post">
    <div class="siimple-form">
    <div class="siimple-form-detail">....يمكنك العثور عليها بسهولة</div>
	<br>
    <div class="siimple-form-field">
        <div class="siimple-form-field-label">في اي مدينة ؟</div>
        <input type="text" class="siimple-input siimple-input--fluid" placeholder="x55" name="fname" >
        <input class="siimple-btn siimple-btn--blue" type="submit"  value="Boo">
    </div>
    </div>
    </form>';

}

?>
        <br>
    <br>
<br>

<span class="success">كيف الوضع</span> <span class="directory">كويس؟ ^_^</span>
              </div>
            </div>
            <br>
            <button style="align:right;" class="button is-dark is-small"><a href="/">Home</a></button> | 
            <button style="align:right;" class="button is-dark is-small"><a href="3.html">Next Chall</a></button>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>

<script>
	function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("تسولف انت ماكتبت شي");
        return false;
    }
}
</script>
<script src='https://use.fontawesome.com/releases/v5.3.1/js/all.js'></script><script  src="./script.js"></script>
</body>

</html>