<?php 
session_start();
$con=mysqli_connect('localhost','root','','bank');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $row["name"]?></title>
	<style>
		body {
			font-family: "Lato", sans-serif;
			margin: 0px;
			text-align:center;
			}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			width:60%;
			}
		th{
			
			font-size:24px;
			padding:16px;
		}
		
		td{
			font-size:22px;
			padding: 11px 16px 11px 18px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
			color:white;
		}
		body{
			background-color:black;
		}
		.f {
			background:#7E39A6;
		}
		.f tr:hover {
			background: rgba(0,0,0,0.19);
		}
		.btn {
			background-color:RoyalBlue;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}

		.btn:hover {
			background-color:RoyalBlue;
		}
		h1{
			color:white;
		}
		.home_but{
		background-color:#7E39A6;
		color:white;
		width: 220px;
        height: 51px;
		border-radius: 10px;
	    border: 1px solid #00FFFF;
	}
	.home_but:hover{
		filter: blur(1px);
		background-color:white;
		color:#7E39A6;
		font-size:20px;
		border-radius:25px;
	}
	</style>
</head>
    <body>
	<h1>Transaction of <?php echo $name?> </h1>
    <div class="view">
       <table class="f">
			<tr>
				<th>Name</th>
				<td><?php echo $name?></td>
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>Email</th>
				<td><?php echo $mail?></td>
			</tr>
           
           <tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th> Credits</th>
				<td><?php echo $amount?></td>
			</tr>


        </table>

        </div>
		<br>
        <br>
     <div class="buttons">
	<a href="transfer_to.php">
		<button class="home_but"> Transfer To</button>
	</a>
	</div>
	<br>
	<br>

               
    <div class="buttons">
		<a href="ministatement.php">
		<button class="home_but">Mini Statement</button>
		</a>
	</div>
	<br>
	<br>
	<div class="buttons">
		<a href="index.php">
		<button class="home_but">Go To HomePage</button>
		</a>
	</div
               


    </body>
</html>