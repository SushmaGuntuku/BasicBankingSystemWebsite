<html>
<head>
    <title>Basic Banking System</title>
    <link rel="shortcut icon" href="images/poo.png">
	<style>
	button{
		background-color:#8cbed6;
	}
	body
	{
		text-align:center;
	}
		body{
		background-image:url("images/bank4.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	
	#button{
		height:50px;
        display: inline-block;
        background: transparent;
        font-weight:bold;
        padding: 0px 50px;
		color:#18461E;
		border-radius:5px;
		border: 2px solid #18461E;
	}
	#button:hover{
		background-color:#268C34;
		color:white;
		border-radius:25px;
	}
	#button1{
		padding: 0px 60px;
		height:50px;
        display: inline-block;
        background: transparent;
        font-weight:bold;       
		color:#18461E;
		border-radius:5px;
		border: 2px solid #18461E;
	}
	#button1:hover{
		background-color:#18461E;
		color:white;
		border-radius:25px;
	}
	</style>
</head>
<body >

	<div id="header">
       <br>
       <h1 style=" font-weight:bold;font-size:60px;text-shadow: 2px 2px black;">&nbsp;&nbsp;&nbsp;&nbsp; Sparks Foundation Internship Project </h1>
       <h2 style=" text-shadow: 2px 2px black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Basic Banking System </h2>
    </div>
	<br>
	<br>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button id="button1"type="button" href="getdetail.php">View users</button>
                </a>

               
                </tr>

                <tr>        
               <br> <br> <br>
			   <a href="transfer.php">
			   <button  id="button" type="button">Credit Transfer</button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button  id="button" type="button">All Transaction</button>
               </a>

            </table>
    </div>
	           
</body>
</html>