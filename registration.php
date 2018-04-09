<!DOCTYPE html SYSTEM "about:legacy-compat">
<html itemscope="" itemtype="http://schema.org/Organization" lang="en">   
   <head>
     <?php include 'inc/head.php';?>
	  <title> Blood Donation - Registration </title>
	</head>
	
	
  <body>
     <!-- -------------------- Page Top Header Section ------------------ -->
     <?php include 'inc/header.php';?>
	 
     <hr class="panal-top"/>
  	<br/>
	<br/>
	 <!-- -------------------------- New user Registration Form ------------- -->
	 <form class="container clearfix text-extend" action="config/reg.php" method="post">
	     <h2 class="text-center text-uppercase"> Register yourself for Blood Donation Database <hr/></h2>
		 <center class="bg-faded-form">
		     <div class="row">
			     <div class="col-25"><label class="text-uppercase "> Name: </label></div>
			     <div class="col-75"><input type="text" name="name"  placeholder="Your full name" required></div>
				</div>
			 <div class="row">
			     <div class="col-25"><label class="text-uppercase" > Student ID: </label></div>
			     <div class="col-75"><input type="number" name="student_id"  placeholder="Your Student ID no." required></div>
				</div>
			 <div class="row">
			     <div class="col-25"><label class="text-uppercase">Date of Birth:</label></div>
				 <div class="col-75"><input type="date" name="dob" placeholder="Date of Birth" required></div>
				</div> 
			 <div class="row">
			     <div class="col-25"><label class="text-uppercase"> Blood Group:</label></div>
				 <div class="col-75">
				     <select required name="blood_group" >
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

				 </div>
				</div>
			 <div class="row">
			     <div class="col-25"><label class="text-uppercase"> Gender:</label></div>
			     <div class="col-75" style="padding-top:7px; margin: 4;">
				     <input type="radio" name="gender" value="Male" required> Male &nbsp;
				     <input type="radio" name="gender" value="Female"> Female
					</div>
				</div>	
			 <div class="row">
			     <div class="col-25"><label class="text-uppercase"> Contact :</label></div>
				 <div class="col-75"><input type="number" name="contact" placeholder="Contact" required></div>
				</div>	

			 <div class="row">
			     <div class="col-25"><label class="text-uppercase">Password :</label></div>
				 <div class="col-75"><input type="password" name="password" placeholder="password" required></div>
				</div>
			 
			     <div class="row">
				 <div class="col-85 text-extend"> 
				     <input type="checkbox" id="myCheck"  onclick="myFunction()" required>
					 <p id="text" style="display:none">Checkbox is CHECKED!</p>
				 
				 <p> By marking this check box you are agree to donate blood in the help of any IUBATian</p>
				     </div>
					</div> 
			    <div class="row">
				 <div class="col-85 text-extend h2"><b>
				 	<input type="submit" name="submit" value="Submit" style="width:50%;"></b>
				 </div>
				</div>
		 </br>
		 <hr/>
		 <div><p>
		     *Your student ID will be your username. </br>
			 *Read <a href="#">Privacy</a> & <a href="#">Conditions</a> for more details.
			 </p></div>
		 
        </form>
		

	</body>
	</br>
	
	<!-- -----------------------Footer section ----------------- -->
	<hr/>
	<footer class="f1">
	 
	 <?php include 'inc/footer.php';?>  
	</footer>
</html>