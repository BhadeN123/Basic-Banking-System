<!doctype>
<html>
  <head>
    
     <style type="text/css">
     *{
    margin:0;
    padding:0;
    box-sizing: border-box;
      }
  body{
      font-family: Arial, Helvetica, sans-serif;
     background-color: darkorange;
  }
  header{
      padding-top: 50px;
      background-color: rgb(90, 70, 65);
  }
  header hr{
    width: 100%;
    height: 2px;
    margin-left: auto;
    margin-right: auto;
    background-color: #060d13;
    border: 0 none;

  }
  header ul{
      padding-bottom: 50px;
      font-size: 30px;
  }

 footer{
    padding-top: 100px;
    text-align: center; 
 }
    
    table{
      border-collapse: collapse;
     width: 80%;
     
     font-family: Arial, Helvetica, sans-serif;
     font-size: 20px;
     text-align: center;
     margin-left:10%; 
    margin-right:20%;
 }
 th
 {
  background-color: rgb(84, 197, 87);
     color: rgb(19, 16, 16);
     height: 50px;
 }
td{
  height: 30px;
}
  tr:nth-child(even)
 {
     
 }
 table, td, th {
  border: 1px solid black;
}
  </style>
     
  <head>
    <body>
      <header>
      <div class="nav">
        <a href ="http://localhost/hi/index.php"><image src="home.jpg" width="100px"></br>  home</image></a>
        
      </div>
      <hr/>
      </header>
     <footer>
        <h1> Transection list</h1><br/><br/>
        <table >
          <tr>
          <th>Sr.No</th>
          <th>Date</th>
            <th>Sender</th>
            <th>Receiver</th>
           
            <th>Amount_transfer</th>
            <th>Current Balance</th>
          </tr>
          <?php
         
           $co=mysqli_connect("localhost","root","","transection_cus");
           if($co->connect_error)
           {
               die("Connection failed:".$conn->connect_error);
           }
           $sql="SELECT * FROM user_history1";
          
           
           $result=$co->query($sql);
           
           if(!empty($result) && $result->num_rows > 0){
            
           
             while($row=$result->fetch_assoc())
             {
             
               echo "<tr><td>". $row["Sr.No"] ."</td><td>". $row["Date"] ."</td><td>". $row["Sender"] ."</td><td>". $row["Receiver"] ."</td><td>". $row["Amount_transfer"] ."</td><td>". $row["Balance"]."</td></tr>";
             }
             echo "</table>";
           }
           else
           {
            echo "0 result";
           
           }
           
          ?>
          </table>
     </footer>
    </body>
</html>
