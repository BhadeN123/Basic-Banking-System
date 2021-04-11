<!doctype>
<html>
  <title>window.location</title>
  <head>
  <link rel="Stylesheet" type="text/css" href="style.css">
  <style type="text/css">
  *{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
body{
    font-family: Arial, Helvetica, sans-serif;
    background-color: rgb(73, 65, 65);
}
header{
    padding: 20px;
    background-color: darkgoldenrod;
}
header h1,h2{
   text-align: center;
   font-size: 48px;
   margin-bottom: 20px;
   color: darkred;
  

}
main{
    padding: 50px;
    background-color: rgb(73, 65, 65);
}
main hr{

        width: 100%;
        height: 2px;
        margin-left: auto;
        margin-right: auto;
        background-color: #148fe7;
        border: 0 none;
   
}

button
{
    background-color: goldenrod;
    border: 10px;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 10px 30px;
    cursor: pointer;
    margin-left: 125px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    font-size : 15px
    
  
}
footer{
    padding :25px;
    background-color: rgb(73, 65, 65);
}
footer h1{
    text-align: center;
    font-size: 20px;
    background-color: #FFFF00
 
 }

.imagerow
{
    display: inline-block;
    
    margin: 10px 80px;
   
    margin-left: 150px;

}
button:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    color:black
    
  }

.myImg
{
    text-align: center;
}
  </style>
    
  <head>
<body>
   <header>
     <h2>!!!!  WELCOME TO  !!!!</h2>
     <h1>Yess Bank</h1>
     <div class="myImg">
     <image src="Yes.jpg" width="200px" height="200px">
    </div>
   </header>
   <main>
   <hr/></br>
   
   <div class="imagerow">
    <image src="customer.jpg" width="100px" >
   </div>
   <div class="imagerow">
    <image src="transection.jpg" width="100px">
   </div>
   <div class="imagerow">
    <image src="transfer.jpg" width="100px" >
   </div>
   <div class="imagerow">
    <image src="contact.jpg" width="100px">
   </div></br>
      <button id="customer list" onclick="customer()">customer list</button>&nbsp;&nbsp;&nbsp;&nbsp;
      
      <button id="transection list"onclick="transection()">transection list</button>&nbsp;&nbsp;&nbsp;&nbsp;
     
      <button id="transfer-money"onclick="transfer()">Transfer money</button>&nbsp;&nbsp;&nbsp;&nbsp;
      
      <button id="Contact Us"onclick="contact()">contact us</button>
    </br>
  </br>
    <hr/>

  </main>
   <footer>
     <h1>Banking Website | sparks foundation intrenship | Nikita Bhade<h1>
  </footer>
  <script>
    function customer()
    {
      window.location="customer.php"
    }
    function transection()
    {
      window.location="transection.php"
    }
    function transfer()
    {
      window.location="money_transfer.php"
    }
    function contact()
    {
      window.location="contact.html"
    }
  </script>
   <main>
</body>
</html>
?php
$co =mysqli_connect("localhost","root","");
mysqli_select_db($co,"transection_cus");
$insert="DELETE FROM user_history1";
         if (mysqli_query($co, $insert)) {
            echo "Record deleted successfully";
         } else {
            echo "Error updating record: " . mysqli_error($co);
         }
?>