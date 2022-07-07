<!DOCTYPE>
<html>
<head>
<title>String Manipulation</title>
<meta charset="utf-8" />
    <style>
        body{
				background-color:#35271C;
			}
			table{
				font-family: Tahoma;
				color: white;
				border-collapse: collapse;
				width: 60%;
                height: 20%;
			}
			td{
				color: white;
				background-color: #94684C;
				
				font-size: 23px;	
				border: 6px ridge #D7D9CE;
			}
            th{
                background-color: 866046;
		        font-size: 40px;
            }


    </style>
</head>
<body>
<form method="post">
<table align = "center" >
		<th align = "center"; colspan = "2">STRING MANIPULATION</th>

        <tr>
            <td>
            <label for = "numb1">Input a string value </label><input type="string" name="num1"  required/> <br>
            <label for = "numb2">Start of Count: </label><input type="number" name="num2"  min = "1"  required/> <br>
            <label for = "numb3">Length of characters to return </label><input type="number" name="num3"  min = "1" required/> <br>
            <label for = "numb1">String to Search  </label><input type="string" name="num4" required/> <br>
		    <label for = "numb1">String to Replace </label><input type="string" name="num5"  required/> <br>
		    <label for = "numb1">String to Explode() </label><input type="string" name="num6"  required/> <br>
        	<label for = "numb1">Separator for Explode: </label><input type="string" name="num7"  required/> <br>
            </td>
        </tr>
        <tr>
        <td align = "center"; colspan = "3"> <input type="submit" name="submit" value="String Manipulation Functions"/>
		<input type="reset" value="Clear String Values"/></td>
        </tr>
        </table>
</form>


<table align = "center"> 
<tr>
    <td>
<?php
$br="<br>";
if(isset($_POST['submit']))
{
$a = $_POST['num1'];
$count = $_POST['num2'];
$charac = $_POST['num3'];
$needle = $_POST['num4'];
$replace = $_POST['num5'];
$strExplode = $_POST['num6'];
$sepExplode = $_POST['num7'];


echo "Given String :  ".$a;
echo  $br;
echo "Result  of strlen: ".strlen($a);
echo $br;
echo "Conversion to UpperCase: ".strtoupper($a);
echo  $br;
echo "Conversion to LowerCase:  ".strtolower($a);
echo  $br;
echo "Convert the first character to UpperCase:  ".ucfirst($a);
echo  $br;
echo "Convert the first character to LowerCase: ".lcfirst($a);
echo  $br;
echo "Convert the first character of every word in UpperCase: ".ucwords($a);
echo  $br;
echo "Combination of ucwords() and strtoupper():".strtoupper(ucwords($a));
echo  $br;
echo "Combination of uc words() and strtolower(): ".strtolower(ucwords($a));
echo  $br;
echo "Encrypted Value: ".md5($a);
echo  $br;
echo " result of str_word_count(): ".str_word_count($a);
echo  $br;
echo "result of substr(): ".substr($a, $count, $charac);
echo  $br;
echo "result of strpos(): ".strpos($a, $needle);
echo  $br;
echo "result of stripos(): ".stripos($a, $needle);
echo  $br;
echo "result of strchr(): ".strchr($a, $needle);
echo  $br;
echo "result of strrchr(): ".strrchr($a, $needle);
echo  $br;
echo "result of str_replace(): ".str_replace($needle, $replace, $a);
echo  $br;
echo "result of str_ireplace(): ".str_ireplace($needle, $replace, $a);
echo  $br;
echo "result of explode(): ".print_r(explode($sepExplode, $strExplode));
echo  $br;
echo "imploding the explode(): ".implode(explode($sepExplode, $strExplode));







}
?>
</td>
</tr>
</body>
</html>
 