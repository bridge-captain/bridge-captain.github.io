<html>
    <head>
        <title>Word Captain</title>
        <script type="text/javascript" src="auto_complete.js"></script>
        <link rel="stylesheet" type="text/css" href="WordCaptain.css" />        
        <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;'>        
    </head>
    <body>
        <h2 style="color:Navy;text-align:center; font-size:34px;">Word Captain</h2>  
        <?php
    function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo
        |fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i"
        , $_SERVER["HTTP_USER_AGENT"]);
    }

      
  $Mobile = isMobile();
  $pspell = pspell_new("en");
   
  $letters =new SplFixedArray(7);
  $letters[0] = 'A';
  $letters[1] = 'B';
  $letters[2] = 'C';
  $letters[3] = 'D';
  $letters[4] = 'E';
  $letters[5] = 'F';
  $letters[6] = 'G';
  $sz='font-size:220%; font-weight: bold'; 
  echo '<form method="POST" action="game.php">';
       echo '<a href="something" class="keybutton" style="'.$sz.';left:165px; top:200px;"'.$c.'>'.$letters[0].'</a>'; // A
       echo '<a href="something" class="keybutton" style="'.$sz.';left:165px; top:310px;"'.$c.'>'.$letters[1].'</a>'; // B
       echo '<a href="something" class="keybutton" style="'.$sz.';left:165px; top:420px;"'.$c.'>'.$letters[2].'</a>'; // C
       echo '<a href="something" class="keybutton" style="'.$sz.';left:280px; top:255px;"'.$c.'>'.$letters[3].'</a>'; // D
       echo '<a href="something" class="keybutton" style="'.$sz.';left:280px; top:365px;"'.$c.'>'.$letters[4].'</a>'; // E
       echo '<a href="something" class="keybutton" style="'.$sz.';left:050px; top:365px;"'.$c.'>'.$letters[5].'</a>'; // F
       echo '<a href="something" class="keybutton" style="'.$sz.';left:050px; top:255px;"'.$c.'>'.$letters[6].'</a>'; // G
       echo '<p><input type="text" size="12" id="txtHint"  onkeyup="showName(this.value)"></p>';
    echo '</form>';
    echo '<p><b>Type the word</b></p>';
    echo '<p>Matches: <span id="txtName"></span></p>';

  ?>  
</body>
</html>