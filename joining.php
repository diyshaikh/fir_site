<?php  
 include ("db_connect.php");
 $sql = mysqli_query($connect, " SELECT * FROM victim_data right join criminal_data on criminal_data.Criminal_FIR = victim_data.Victim_FIR ") or die('query failed'); 
 $ipc = mysqli_query($connect, " SELECT * from criminal_data join ipc_data on criminal_data.IPC_app = ipc_data.IPC_number");
 $criminal= mysqli_query($connect, " SELECT * from victim_data");

 ?>
 <!DOCTYPE html>  
 <html>  

      <head>   
           <title>First Information Report</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <link rel="stylesheet" href="joining.css">

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
<style>
   
		.button-container {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 0px;
		}
          .btn {

  background-color: #4ca2cd; /* Green */
  border: none;
  color: white;
  width: 100px; /* Fixed width */
  height: 50px; /* Fixed height */
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 16px;
  margin: 20px ;
  position: relative;
  left: -0px;
  top: -10px;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
          }
  

  .btn:hover {
			background-color: #3e8e41; /* Darker green */
		}
</style>

           <title>First Information Report</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body class="body">  
           <br />  <div class="div0">
          
          <div>
           <div class="container" style="width:1000px;">  
                <h1 align="">First Information Report</h1><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                          <th>FIR number</th>
                              
                          <th>Victim's Name</th>  

                               <th>Criminal's Name</th>  
                               <th>Place of crime</th>  
                               <th>Statement of victim</th>  
                               <th>District</th>  
                               <th>Type of crime </th>  
                               <th>Crime </th>  
                               <th>IPC number </th>  
                               <th>IPC </th>  
                               <th>View FIR </th>



                          </tr>  
                          
                          <?php
                          
      if(mysqli_num_rows($sql) > 0 and mysqli_num_rows($ipc) > 0){
      while($fetch_message = mysqli_fetch_assoc($sql) and $row = mysqli_fetch_assoc($ipc) and $col = mysqli_fetch_assoc($criminal)){
      
   ?><tr>  
        <td><?php echo $fetch_message["Criminal_FIR"];?></td>  

       <td><?php echo $col["Name"];?></td> 
       <td><?php echo $fetch_message["Name"];?></td>  
       <td><?php echo $fetch_message["Place"];?></td>  
       <td><?php echo $fetch_message["Statement"]; ?></td>
       <td><?php echo $fetch_message["District"];?></td>  
       <td><?php echo $fetch_message["Type"];?></td>  
       <td><?php echo $fetch_message["Crime"];?></td>
       <td><?php echo $row["IPC_number"];?></td> 
       <td><?php echo $row["IPC"];?></td> 
       <td><button class="btn" onclick="window.location.href='view.php'"> View FIR</button></td>




  
</tr>  
                          <?php  
                               }  
                          }  

                          ?>  
                     </table>  
                     <div class="button-container">
          <button class="btn" onclick="window.location.href='home.php'">Home </button>

	</div>
                </div>  
           </div>  
           <br />  
      </body>  
 </html>
