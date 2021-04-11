<!DOCTYPE html>
<html>


<head >
<body style="background-color: darkgoldenrod">

<style type="text/css">
.header{
position:absolute;
top:0;
height:2cm;
width:100%;
left:0;
background-color:navy;
}
.footer{
    position: fixed;
    bottom: 0;
    height:0.5cm;
    left:0;
    width:100%;
    background-color: darkgoldenrod;
}
   
h1{
    color:white;
    text-align: center;
}
.msg1{
    position:absolute;
    margin-top:5cm;
    width:16cm;
    height:4cm;
    
    left:14cm;
    border-style: solid;
  border-color:green;
  background-color: darkgoldenrod;
}
.msg2{
    position:absolute;
    margin-top:5cm;
    width:16cm;
    height:4cm;
    
    left:14cm;
    border-style: solid;
  border-color:navy;
}
h3{ margin-top:1.5cm;
    font-size:20px;
    margin-left:0.5cm;
}
.cls{
    position:absolute;
    margin-top:4cm;
    left:3cm;
    
}
input{
    background-color:navy;
    color:white;
    border-radius:10px; 
    padding:2px;
    width:2cm;
}
input:hover{
    background-color:red;
    cursor:pointer;
}

</style>
</body>
</head>
</html>
<?php 


echo "<div class='header'>"."<h1>"."STATE BANK"."</h1>"."</div>";
//echo"<form action='index.html'>";
echo"<a>home</a>";
$debitor =$_POST['debitor'];
$i=1;

$creditor =$_POST['creditor'];

$amount=$_POST['balance'];

date_default_timezone_set("Asia/Calcutta");
$date=date("Y-m-d H:i:s");
echo "DATE :" .$date."<br>";
$co =mysqli_connect("localhost","root","");
mysqli_select_db($co,"transection_cus");
$con =mysqli_connect("localhost","root","");
mysqli_select_db($con,"customerlist");
$sql1 = "select * from userinfo where Name='$debitor'";
$sql2 = "select * from userinfo where Name='$creditor'";
$d=mysqli_query($con,$sql1);
$c=mysqli_query($con,$sql2);
while ($row = $d->fetch_assoc()) {
 
    
    $damount =$row['Current balance'];
    // $debitortransid=$data['trans_id'];
     $debitorname=$row['Name'];//cus_name
     $sender=$row['Name'];
     $credit=$damount-$amount;
   
}
while ($row = $c->fetch_assoc()) {
 
   
   
        $camount =$row['Current balance'];
    $creditorname=$row['Name'];
   // $creditortransid=$data['trans_id'];
    $debit=$camount+$amount;

}

if($amount<=$damount )
{    
   
    if($debitor != $creditor)
    {
        $conn=mysqli_connect("localhost","root","","customerlist");
        if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully<br>';
         $debit= mysqli_real_escape_string($con,$debit);
         $creditor=mysqli_real_escape_string($con,$creditor);
         //$sql ="UPDATE userinfo SET Current balance =$debit WHERE Name='$creditor'" ;
         $sql="UPDATE userinfo SET `Current balance`='$debit' WHERE `Name`='$creditor'";
         $insert="INSERT INTO user_history1 VALUES('$i','$date','$debitor','$creditor','$amount','$credit')";
         if (mysqli_query($co, $insert)) {
            echo "Record updated successfully";
         } else {
            echo "Error updating record: " . mysqli_error($co);
         }
         
         if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
         } else {
            echo "Error updating record: " . mysqli_error($conn);
         }
         $sqll="UPDATE userinfo SET `Current balance`='$credit' WHERE `Name`='$debitor'";
         if (mysqli_query($conn, $sqll)) {
            echo "Record updated successfully";
         } else {
            echo "Error updating record: " . mysqli_error($conn);
         }
        
    echo"<div class='msg1'>";
    echo "<h3>".$debitor." "."YOUR TRANSACTION IS SUCCESSFUL !"."</h3>";
    echo"<image src='t2.gif' height=100>";
  
    echo"</div>";
    $i++;
    }
    else{
        echo"<div class='msg2'>";
    echo "<h3>"."TRANSACTION UNSUCCESSFUL ! "."<br>"."SENDER AND RECEIVER'S NAME CAN'T BE SAME."."</h3>";
    echo"<image src='f1.png'>";
   
    echo"</div>";
    }

}
else
{
   
    echo"<div class='msg2'>";
    echo "<h3>".$sender." "."YOU DONT HAVE ENOUGH BALANCE IN YOUR ACCOUNT !"."</h3>";
    echo"<image src='f1.png'>";
    echo"</div>";
}
echo"<div class='cls'>";
echo"<input type='submit' value='CLOSE' class='clas'";

echo"</div>";

echo "<div class='footer'>"."</div>";
//$conn->close();
?>