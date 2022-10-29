<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:#673ab7;
	  font-weight:bold;
  }
  .container {
    margin-top: 3%;
    width: 60%;
    background-color: #26262b9e;
    padding: 10px;
  }
  .btn-primary {
    background-color: #808080;
	}
	.display-chat{
		height:300px;
		background-color:#d69de0;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #c616e469;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
  </style>

<div class="container">
  <center><h2>Welcome <span style="color:#add8e6;"><?php echo $_SESSION['name']; ?> !</span></h2>
  <br><br>
	<label>Click below to Join the chat</label><br>
	<br><br>
	<a href="chatpage.php" class="btn btn-primary">Open Chat</a>
  
</div>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>