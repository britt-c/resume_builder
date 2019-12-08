<html>
	<header style="background-color:#303030; text-align:left;">
		<h1><?php echo $firstname . $lastname ; ?></h1>
		<p><?php echo $phonenumber . " . " .  $email . "\n"; echo $address; ?></p>
	</header>
	<section>
		<h1>Summary</h1><br/>
		<hr noshade width="90%">
		<p><?php echo $summary; ?></p>
	</section>
	<section>
		<h1>Education</h1>
		<hr noshade width="90%">
		<h3><?php echo $school . "--" . $degree; ?></h3>
		<p><?php echo $graddate; ?></p>
		<h3>Awards and Honors<h3>
		<p><?php echo $awardsandhonors; ?></p>	
	</section>
	<section>
		<h1>Experience</h1>

		<h3><?php echo $employer . "--" . $jobtitle; ?></h3>
		<p><?php echo $startdate . "-" . $enddate . "\n"; ?></p>
		<p><?php echo $jobdescription; ?></p>
		<br/>
		<h3><?php echo $employer2 . "--" . $jobtitle2; ?></h3>
		<p><?php echo $startdate2 . "-" . $enddate2; ?></p>
		<p><?php echo $job2description; ?></p>
		<br/>
		<h3><?php echo $employer3 . "--" . $jobtitle3; ?></h3>
		<p><?php echo $startdate3 . "-" . $enddate3 . "\n"; ?></p>
		<p><?php echo $job3description; ?></p>
		<br/>		
	</section>
	<section>
		<h1>Qualifications and Skills</h1>
		<hr noshade width="90%">
		<p><?php echo $qualsandskills; ?></p>
	</section>
<?php $firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$phonenumber = $_POST["phonenumber"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			$summary = $_POST["summary"];
			$school = $_POST["school"];
			$degree = $_POST["degree"];
			$graddate = $_POST["graduate"];
			$awardsandhonors = $_POST["awardsandhonors"];
			$employer = $_POST["employer"];
			$employer2 = $_POST["employer2"];
			$employer3 = $_POST["employer3"];
			$jobtitle = $_POST["jobtitle"];
			$jobtitle2 = $_POST["jobtitle2"];
			$jobtitle3 = $_POST["jobtitle3"];
			$startdate = $_POST["startdate"];
			$startdate2 = $_POST["startdate2"];
			$startdate3 = $_POST["startdate3"];
			$jobdescription = $_POST["jobdescription"];
			$job2description = $_POST["job2description"];
			$job3description = $_POST["job3description"];
			$enddate = $_POST["enddate"];	
			$enddate2 = $_POST["enddate2"];
			$enddate3 = $_POST["enddate3"];
			$qualsandskills = $_POST["qualsandskills"];
?>

</html>
