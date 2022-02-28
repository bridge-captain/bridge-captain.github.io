<!DOCTYPE html>
<html>
<head>
    <title>Word Captain</title>
    <link rel="stylesheet" type="text/css" href="WordCaptain.css" />
</head>
<body onLoad="display()"> 

<h1 style="color:Navy;font-size:34px;">Word Captain</h1>

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

  if ($Mobile){$sz='375%';
  echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:200px; top:300px;">'.$letters[0].'</a>'; // center
  echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:200px; top:500px;">'.$letters[1].'</a>';
  echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:200px; top:700px;">'.$letters[2].'</a>';    
  echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:350px; top:400px;">'.$letters[3].'</a>';
  echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:350px; top:600px;">'.$letters[4].'</a>';
  echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:050px; top:600px;">'.$letters[5].'</a>';
  echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:050px; top:400px;">'.$letters[6].'</a>';
  }
else {
    $sz='175%';
    echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:200px; top:300px;">'.$letters[0].'</a>'; // center
    echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:200px; top:400px;">'.$letters[1].'</a>';
    echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:200px; top:500px;">'.$letters[2].'</a>';    
    echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:300px; top:365px;">'.$letters[3].'</a>';
    echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:300px; top:435px;">'.$letters[4].'</a>';
    echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:100px; top:435px;">'.$letters[5].'</a>';
    echo '<a href="something" class="keybutton" style="font-size:'.$sz.';left:100px; top:365px;">'.$letters[6].'</a>';
    }

  $s ='"font-size:'.$sz.'; left:100px; top:600px;"';
  echo '<a href="something" class="enterButton"  style='.$s.'>Enter</a>';

  
 $word = "test";
    if (pspell_check($pspell, $word)) {
        echo '"<br>You can spell "'.$word.'"';
    } else {
        $szuggestions = pspell_suggest($pspell, $word);
        echo "<br>I didn't understand ".$word;       
    }
?>

<?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button1() {
            echo "This is Button1 that is selected";
        }
        function button2() {
            echo "This is Button2 that is selected";
        }
?>
  
    <form method="post">
        <input type="submit" name="button1"
                class="button" value="Button1" />
          
        <input type="submit" name="button2"
                class="button" value="Button2" />
    </form>

</body>
</html>