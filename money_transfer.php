<!DOCTYPE html>
<html>

<head >

<style type="text/css">
body{
    font-family: Arial, Helvetica, sans-serif;
    background-color: rgb(73, 65, 65);
}
.header{
position:absolute;
top:0;
height:2cm;
width:100%;
left:0;
background-color: goldenrod;
}
h1{
    color: darkred;
    text-align: center;
}
h2 {
    color: darkred;
    text-align: center;
}

.footer{
    position: fixed;
    bottom: 0;
    height:0.5cm;
    left:0;
    width:100%;
    background-color: goldenrod;
}
.main{
position:absolute;
left:10cm;
margin-top:5cm;
width:20cm;
height:10cm;
background-color: goldenrod;
border-radius:10px;

}
.main:hover{
    box-shadow: 3px 3px rgb(153, 148, 148);
    cursor:pointer;
}
table{
    position:absolute;
    top:2cm;
    left:1.7cm;
    padding:4px;
    
}
th,td{
    padding:6px;
    color: darkred;
}
.btn{
    background-color:navy;
    color:white;
    width:3cm;
   height:1cm;
   border-radius:10px;
}
.btn:hover{
    background-color:grey;
    cursor:pointer;

}
input{
    border-radius:10px;
}

</style>

</head>
</html>
<?php

$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,"customerlist");
$sql="select * from userinfo";
$res=mysqli_query($con,$sql);

$r=mysqli_query($con,$sql);

echo "<div class='header'>";
echo"<h1>"."STATE BANK"."</h1>";
echo "<a href ='http://localhost/hi/index.php'>  home</a>";
date_default_timezone_set("Asia/Calcutta");
$date=date("Y-m-d H:i:s");
echo $date;



echo"</div>";

echo"<form action='check.php' method='POST'>";

echo"<div class='main'>";

echo"<h2 align='center'>TRANSFER MONEY</h2>";
echo"<table>";
echo"<tr>";
echo"<td><label>SENDER'S NAME  : </label></td>";
//if($_GET)
{  
    $s="select * from userinfo ";
    //where customer_id='$tt'
    //echo $s;
    $rs=mysqli_query($con,$s);
echo"<td><select name='debitor'>";

while($data=mysqli_fetch_assoc($rs))
{
    echo"<option value='".$data['Name']."'>".$data['Name']."</option>";
}
echo"</select> </td>";
}

echo"</tr>";

echo"<tr>";
echo"<td><label> SEND MONEY TO : </label></td>";
echo"<td><select name='creditor' required>";
echo"<option value=''>sender's name</option>";
while($data=mysqli_fetch_assoc($r))
{
echo"<option value='".$data['Name']."'>".$data['Name']."</option>";
}
echo"</select> </td>";
echo"</tr>";

echo"<tr>";
echo"<td><label> AMOUNT: </label></td>";
echo"<td><input type='text' name='balance' required> </td>";//current balabce=amount
echo"</tr>";

echo"<tr>";
echo"<td><input type='submit' class='btn' value='SEND'> </td>";
echo"</tr>";
echo"<tr>";
echo"<td colspam='2'><image src='1.gif' align='center'> </td>";
echo"</tr>";

echo"</table>";
echo"</div>";
echo"</form >";
echo "<div class='footer'>"."</div>";
?>