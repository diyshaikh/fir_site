<?php
include("db_connect.php");
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the Criminal_FIR number from the form
  $Criminal_FIR = $_POST['Criminal_FIR'];
  
  // Generate the SQL query to delete the record
  $deleteQuery = "DELETE FROM criminal_data WHERE Criminal_FIR = '" . mysqli_real_escape_string($connect, $Criminal_FIR) . "'";
  // Prompt the user for confirmation before executing the delete query
  echo '<script>
        if (confirm("Are you sure you want to delete this record?")) {
          ' . mysqli_query($connect, $deleteQuery) . '
          alert("Record deleted successfully");
          window.location.href = "home.php";
        } else {
          alert("Record not deleted");
        }
      </script>';
  
  // Close the database connection
  mysqli_close($connect);
}

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
  <h1>delete Record</h1>
  <form id="Register"class="inputgroup"method="POST" action="delete_vic.php" enctype="multipart/form-data">

    <label for="Criminal_FIR">Criminal_FIR:</label>
    <input type="text" Criminal_Name="Criminal_FIR" id="Criminal_FIR" ><br><br>
                         </tr> 
    <input type="submit" value="delete Record">
    <div class="button-container">
          <button class="btn" onclick="window.location.href='home.php'">Home </button>

	</div>
    
  </form>
</body>
</html>

