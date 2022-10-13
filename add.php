<?php
	include ("header.inc");
	include ("nav.inc");
?>

<!-- start of page specific content -->
		<section>
			<h1> Course Add </h1>
			<form method="post" action="process_form.php">
			Course ID
			<input type="serial" name="course_id">
			<br>
			Course Code
			<input type="text" name="course_code">
			<br>
			Name
			<input type="text" name="name">
			<br>
			Subject
			<input type="text" name="subject">
			<br>
			Instructor
			<input type="text" name="instructor">
			<br>
			Weeks
			<input type="integer" name="weeks">
			<br>
			Description
			<input type="text" name="description">
			<br>
			<input type="submit">
			</form>
			
			<h1>File Upload</h1>
			<form method="post" action="process_file.php" enctype="multipart/form-data">
		<input type="file" name = "file01" /><br>
		<input type="submit" />
	</form>
		</section>
<!-- end of page specific content -->

<?php
	include ("footer.inc");
?>
 
 
 