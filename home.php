<!DOCTYPE html SYSTEM "about:legacy-compat">
<html itemscope="" itemtype="http://schema.org/Organization" lang="en">

 <head>
     <?php include 'inc/head.php';?>
	  <title> Blood Donation Database </title>
	
	 </head>
	 
<body>
  
   <!-- -------------------- Body top head section start here ------------------ -->
    <?php include 'inc/header.php';?>
    <!-- ---------------------- Navigation Panel Start Here -------------------------- -->
    <div>
	     <?php include 'inc/nav.php';?>
	 </div>
	 <!-- ----------------------------------- Main Body Section Start Here ------------------ -->
	 <div class="container text-center">
	 	<img src="img/blood.png" width="10%" style="padding-bottom:15px;">
	 </div>

	 <div class="clearfix">
	 	<form  action=""  method="post">
	 		<div class="text-center srcbtn " height="44px">
	 			<!-- <input type="text" name="valueToSearch" placeholder="Search for blood" class="srcbtn" style="padding:20px;"> -->
	 			<select name="valueToSearch"  style="padding: 15px;">
	 				<option value="">Select Blood Group</option>
					     <option value="O+">O Positive(+)</option>
						 <option value="A+">A Positive(+)</option>
						 <option value="B+">B Positive(+)</option>
						 <option value="AB+">AB Positive(+)</option>
						 <option value="O-">O Negative(-)</option>
						 <option value="A-">A Negative(-)</option>
						 <option value="B-">B Negative(-)</option>
						 <option value="AB-">AB Negative(-)</option>
						</select>
	 			<div style="margin-top:5px;">
	 				<input  type="submit" name="submit" Value="Search" style="width:40%; padding:3px;">
	 			</div>
	 		</div>
	 	</form>
	 </div>  	
	 <br/>

	<?php

	$servername = "localhost";

	$username = "root";

	$password = "";

	$dbname = "bdb";

	// Create connection

	$conn = new mysqli($servername, $username, $password,$dbname);



	// Check connection

	if ($conn->connect_error) {

		die("Connection failed: " . $conn->connect_error);

	}

	//echo "Connected successfully\n";

	 if(isset($_POST['submit'])){

	 $valueToSearch = $_POST['valueToSearch'];



	// Run Search quary

  $sql = "SELECT * FROM doner WHERE blood_group LIKE '%$valueToSearch%'";
    
	
	$result = $conn->query($sql);
	    if ($result) {

		?>	
	 <div id="printableArea" class="printableArea" align="center">
			<table class=" table table-responsive bg-faded-table clearfix">
			     <thead class="text-center text-uppercase  text-justify" align="center">
				     <tr>
					     <th> Name </th> 
					     <th> Student ID </th>
					     <th> Date of Birth </th>
					     <th> Blood Group </th>
					     <th> Gender </th>
					     <th> Conatct </th>
					     
						</tr>
                    </thead>
				 <tbody class="text-center text-justify">
                 <?php  while($row = $result->fetch_assoc() ){  ?>
				      <tr>
			             <td><?php echo $row['name'];?></td>
			             <td><?php echo $row['student_id'];?></td>
			             <td><?php echo $row['dob'];?></td>
			             <td><?php echo $row['blood_group'];?></td>
			             <td><?php echo $row['gender'];?></td>
			             <?php
			             if($row['gender'] == 'Male')
			             {
			             ?>
			             <td><?php echo $row['contact'];?></td>
			             <?php }
			             else
			             {
			             	?>
			             	<td>Private</td>
			             	<?php
			             }
			             
			              ?>
						</tr>
                 <?php } ?>

					</tbody>
				</table>
				

        </div>
        
        
		
		<script>
			//------------------printDiv function here ------------------

			function printDiv(divName) {

				var printContents = document.getElementById(divName).innerHTML;

				var originalContents = document.body.innerHTML;

				document.body.innerHTML = printContents;

				window.print();

				document.body.innerHTML = originalContents;

			}
		</script>
			
			<?php }}?>
	 
</body>

 <!----------------------------------  Footer Part  ------------- -->
<hr/>
<footer class=f1>
     <?php include 'inc/footer.php';?>  
	</footer>

</html>