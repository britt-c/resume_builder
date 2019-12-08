<html>
	<header style="background-color:#303030; text-align:left;";>
		<h1><?php echo $_POST["firstname"] . " " . $_POST["lastname"]; ?></h1>
		<p><?php echo $_POST["phonenumber"] . " . " .  $_POST["email"] . "\n"; echo $_POST["address"]; ?></p>
	</header>
	<section>
		<h1>Summary</h1><br/>
		<hr noshade width="90%">
		<p><?php echo $_POST["summary"]; ?></p>
	</section>
	<section>
		<h1>Education</h1>
		<hr noshade width="90%">
		<h3><?php echo $_POST["school"] . "--" . $_POST["degree"]; ?></h3>
		<p><?php echo $_POST["graddate"]; ?></p>
		<h3>Awards and Honors<h3>
		<p><?php echo $_POST["awardsandhonors"]; ?></p>	
	</section>
	<section>
		<h1>Experience</h1>
		<h3><?php echo $_POST["employer"] . "--" . $_POST["jobtitle"]; ?></h3>
		<p><?php echo $_POST["startdate"] . "-" . $_POST["enddate"] . "\n"; ?></p>
		<p><?php echo $_POST["jobdescription"]; ?></p>
		<h3><?php echo $_POST["employer2"] . "--" . $_POST["jobtitle2"]; ?><></h3>
		<p><?php echo $_POST["startdate2"] . "-" . $_POST["enddate2"]; ?></p>
		<p><?php echo $_POST["job2description"]; ?></p>
		<h3><?php echo $_POST["employer3"] . "--" . $_POST["jobtitle3"]; ?></h3>
		<p><?php echo $_POST["startdate3"] . "-" . $_POST["enddate3"] . "\n"; ?></p>
		<p><?php echo $_POST["job3description"]; ?></p>
		<br/>		
	</section>
	<section>
		<h1>Qualifications and Skills</h1>
		<hr noshade width="90%">
		<p><?php echo $_POST["qualsandskills"]; ?></p>
	</section>
	<br/>
	<br/>
</html>
