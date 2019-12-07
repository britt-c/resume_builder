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
				<input type="tel" value="" name="phonenumber"><br/>
				<label>Email Address: </label>
				<input type="email" value="" name="email"><br/>
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
					<section>
						<h1>Most recent education: </h1>
						<label>School Name: </label>
						<input type="text" value="" name"school">
						<label>Year of Graduation: </label>
						<input type="date" name="graddate">
						<label>Degree, Major and/or Minor</label>
						<input type="text" value="" name="degree">
						<label>Awards and Honors</label>
						<textarea name="awardsandhonors" placeholder="Include any academic acheivements here." rows="4" cols="60" wrap="soft"></textarea>
					</section>
			</section>
			<section>
				<h1>Qualifications and Skills</h1><br/>
				<textarea name="qualsandskills" rows="4" cols="60" wrap="soft" placeholder="Include any prefessional or educational certificates you've received here. As well as any other skills and qualifications that you'd like to add."></textarea>
			</section>
			<section>
				<h1>Objective</h1><br/>
				<textarea name"objective" rows="4" cols="60" wrap="soft" placeholder="Write a short paragraph that highlights a job "><>
			</section>
		</form>
	</body>
</html>
