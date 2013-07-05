<?php
 error_reporting(E_ALL ^ E_NOTICE);
 if(isset($_GET["number"]))
 {  
  if($_GET["num1"]=="" || $_GET["opr"]=="")
  {
   if($_GET["number"] == ".")
   {
    $num1 = $_GET["num1"].".";
    $result = $num1;
    $dot1 = ".";
   }
   else
   {
    if($_GET["dot1"])
    {
     $num1 = $_GET["num1"].$_GET["number"];
     $result = $num1;
    }
    else
    {
     $num1 = ($_GET["num1"]*10) + $_GET["number"];
     $result = $num1;
    }
   }
  }
  else if($_GET["opr"]!="" && $_GET["num1"] != "")
  {
   if($_GET["number"] == ".")
   {
    $num1 = $_GET["num1"];
    $opr = $_GET["opr"];
    $num2 = $_GET["num2"]."."; 
    $result = $num1.$opr.$num2;
    $dot2 = ".";
   }
   else
   {
    if($_GET["dot2"])
    {
     $num1 = $_GET["num1"];
     $opr = $_GET["opr"];
     $num2 = $_GET["num2"].$_GET["number"];
     $result = $num1.$opr.$num2;
    }
    else
    {
     $num1 = $_GET["num1"];
     $opr = $_GET["opr"];
     $num2 = ($_GET["num2"]*10) + $_GET["number"];
     $result = $num1.$opr.$num2;
    }
   }
  }
 }
 if(isset($_GET["submit"]))
 {
  if($_GET["submit"]!="=" && $_GET["num1"] != "")
  {
   if($_GET["res"]!="")
   {
    $num1 = $_GET["res"];
    $opr = $_GET["submit"];
    $result = $num1.$opr;
   }
   else
   { 
    $num1 = $_GET["num1"];
    $opr = $_GET["submit"];
    $result = $num1.$opr;
   }
  }
  else if($_GET["submit"] == "=" && $_GET["num1"] != "" && $_GET["num2"] != "")
  {
   $num1 = $_GET["num1"];
   $opr = $_GET["opr"];
   $num2 = $_GET["num2"];
   $opr1 = $_GET["submit"];
  }
  else
  {
   $num1 = $_GET["num1"];
   $opr = $_GET["opr"];
   $result = $num1.$opr;
  }
  if($_GET["opr"] == "+" && $opr1 == "=" && $_GET["num1"] != "" && $_GET["num2"] != "")
  {
   $res = $num1 + $num2;
  }
  else if($_GET["opr"] == "-" && $opr1 == "=" && $_GET["num1"] != "" && $_GET["num2"] != "")
  {
   $res = $num1 - $num2;
  }
  else if($_GET["opr"] == "*" && $opr1 == "=" && $_GET["num1"] != "" && $_GET["num2"] != "")
  {
   $res = $num1 * $num2;
  }
  else if($_GET["opr"] == "/" && $opr1 == "=" && $_GET["num1"] != "" && $_GET["num2"] != "" && $_GET["num2"] != "0")
  {
   $res = $num1 / $num2;
  }  
}

if($_GET["opr"] != "" && $opr1 != "" && $_GET["num1"] != "" && $_GET["num2"] != "")
{
 if($_GET["num2"] == "0" && $_GET["opr"] == "/")
 {
  $result = "Not Possible";  
 }
 else
 {
  $result = $res;
 }
}
?>
<html>
 <head>
	 <meta name="viewport" content="width=device-width" />
      <title>iOS 7 Inspired Flat Calculator</title>
 </head>
 <link rel="stylesheet" href="main.css" type="text/css" media="screen" title="no title" charset="utf-8"> 
    <body>
		 <center>
			 <br>
		 <h1>iOS 7 Inspired Flat Calculator</h1>
	 </center>
     <form method="get">
   <table border="0" align="center" style="border-collapse:collapse;" cellspacing="0">
                <tr>
                    <td colspan="4">
                        <input type="text" value="<?php echo $result ?>" name="result" id="res" class="res" />
                        <input type="hidden" value="<?php echo $num1 ?>" name="num1"/>
                        <input type="hidden" value="<?php echo $num2 ?>" name="num2"/>
                        <input type="hidden" value="<?php echo $opr ?>" name="opr"/>
                        <input type="hidden" value="<?php echo $dot1 ?>" name="dot1"/>
                        <input type="hidden" value="<?php echo $dot2 ?>" name="dot2"/>
                        <input type="hidden" value="<?php echo $res ?>" name="res"/>
                    </td>
                 </tr>
                <tr>
                    <td><input type="submit" value="7" name="number"/></td>
                    <td><input type="submit" value="8" name="number"/></td>
                    <td><input type="submit" value="9" name="number"/></td>
                    <td><input type="submit" value="+" name="submit" id="teil" class="teil"/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="4" name="number"/></td>
                    <td><input type="submit" value="5" name="number"/></td>
                    <td><input type="submit" value="6" name="number"/></td>
                    <td><input type="submit" value="-" name="submit" id="teil" class="teil"/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="1" name="number"/></td>
                    <td><input type="submit" value="2" name="number"/></td>
                    <td><input type="submit" value="3" name="number"/></td>
                    <td><input type="submit" value="&times;" name="submit" id="teil" class="teil"/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="." name="number" id="teil" class="teil"/></td>
                    <td><input type="submit" value="0" name="number" id="teil" class="teil"/></td>
                    <td><input type="submit" value="&divide;" name="submit" id="teil" class="teil"/></td>
                    <td><input type="submit" value="=" name="submit" id="teil" class="teil"/></td>
                 </tr>
            </table>
        </form>
    </body>
</html>