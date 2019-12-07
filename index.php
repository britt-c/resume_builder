<html>
	<head>
		<title>Resume Builder</title>
	</head>
	<body>
		<form action="/resume.php" method="POST">
			<section>
				<h1>Contact Information</h1><br/>
				<label>Frist Name: </label>
				<input type="text" value="" name="firstname" maxlength="15"><br/>
				<label>Last Name: </label>
				<input type="text" value="" name="lastname" maxlength="25"><br/>
				<label>Phone Number: </label>
				<input type="number" value="" name="phonenumber" min="10" max="11"><br/>
				<label>Email Address: </label>
				<input type="email" value="" name="emailaddress"><br/>
				<label>Mailing Address: </label>
				<input type="text" value="" name"address"><br/>
			</section>	
			<section>
				<h1>Prefessional Experience</h1><br/>
					<section>
						<h1>Job 1</h1><br/>
						<label>Employer: </label>
						<input type="text" value="" name="employer"><br/>
						<label>Job Title: </label>
						<input type="text" value="" name="jobtitle"><br/>
						<label>Employment Start Date: </label>
						<input type="date"  name="startdate"><br/>
						<label>Employment End Date: </label>
						<input type="date" name="enddate"><br/>
						<input type="checkbox" value="Current Employer" name="currentjob">I currently work here.<br/>
						<label>Job Description: </label><br/>
						<textarea name="job1description" placeholder="Describe your responsibilities here..." rows="4" cols="60" wrap="soft"></textarea><br/>
					</section>
					<section>	
						<h1>Job 2</h1><br/>
						<label>Employer: </label>
						<input type="text" value="" name="employer2"><br/>
						<label>Job Title: </label>
						<input type="text" value="" name="jobtitle2"><br/>
						<label>Employment Start Date: </label>
						<input type="date"  name="startdate2"><br/>
						<label>Employment End Date: </label>
						<input type="date" name="enddate2"><br/>
						<input type="checkbox" value="Current Employer" name="currentjob2">I currently work here.<br/>
						<label>Job Description: </label><br/>
						<textarea name="job2description" placeholder="Describe your responsibilities here..." rows="4" cols="60" wrap="soft"></textarea><br/>
					</section>
					<section>
						<h1>Job 3</h1><br/>
						<label>Employer: </label>
						<input type="text" value="" name="employer3"><br/>
						<label>Job Title: </label>
						<input type="text" value="" name="jobtitle3"><br/>
						<label>Employment Start Date: </label>
						<input type="date"  name="startdate3"><br/>
						<label>Employment End Date: </label>
						<input type="date" name="enddate3"><br/>
						<input type="checkbox" value="Current Employer" name="currentjob3">I currently work here.<br/>
						<label>Job Description: </label><br/>
						<textarea name="job3description" placeholder="Describe your responsibilities here..." rows="4" cols="60" wrap="soft"></textarea><br/>
					</section>
			</section>
			<section>	
				<h1>Education</h1><br/>
				
			</section>
			<section>
				<h1>Qualifications and Skills</h1><br/>
			</section>
			<section>
				<h1>Objective</h1><br/>
			</section>
		</form>
	</body>
</html>
