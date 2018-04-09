<html>
<head>
	<?php include 'include/head.php';?>
</head>
<body>
	<div class="container text-center bg-faded">
		<button onclick="myFunction()" type="button">Get the number of available text tracks</button><br> 
		<video controls id="myVideo" width="100%" preload="auto">
			<source src="img/Padmaavat.2018.1080p.WEB-DL.H264.AAC2.0.ESub - DTOne.mp4" type="video/mp4">
				<track src="img/Padmaavat.2018.1080p.WEB-DL.H264.AAC2.0.ESub - DTOne.srt">
		</video>

	</div>
	<script>
		var vid = document.getElementById("myVideo");

function enablePreload() { 
    vid.preload = "auto";
} 
 
function checkPreload() { 
    alert(vid.preload);
} 
function myFunction() { 
    alert(vid.textTracks.length);
} 
function myFunction() { 
    alert("Controller: " + vid.controller);
} 
</script>



	
</body>
</html>