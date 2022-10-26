<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture App</title>
</head>
<body>
   <form action="">
   <h1>Picture App</h1>
    <br>
    <label for="txtVolume">Select Photo Sizes:</label>
        <input type="range" name="txtVolume" id="txtVolume" placeholder="" min="10" max="100" step="10" value="60">
    <br>
    <label for="clrTheme">Select Border Color:</label>
        <input type="color" name="clrTheme" id="clrTheme">
    <br>
    <button type="submit" name="btnProcess">Process</button>
    <br>
    <br>
   </form>
    <?php
    
    if(isset($_REQUEST['btnProcess'])):
        $Volume = $_REQUEST['txtVolume'];
        $Color =  $_REQUEST['clrTheme'];
        $Image = 'img/Logo.jpg'; 
        
        // echo <<<EOL
        // <img src="{$Image}" width="$Volume" height="$Volume" />
        // EOL;
        
        echo '<img src="' . $Image . '" width="'.$Volume.'" height="'.$Volume.'" />';
        echo "<style type=\"text/css\">img{border: 3px solid ".$Color.";} </style>";
    ?>
 
    <?php endif ?>
</body>
</html>