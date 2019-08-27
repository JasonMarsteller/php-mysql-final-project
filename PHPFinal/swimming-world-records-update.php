<?php include "db.php";?>
<?php include "header.php";?>
<?php include "functions.php";?>
<?php updateRecords();?>

<body>

<div class="container">

	<div class="col-sm-6">
		<h1 class="text-center">Update Records</h1>
		<form action="swimming-world-records-update.php" method="post">

<!-- 			<div class="form-group">
				<label for="ID">ID:</label><br>
					<input type="text" name="id" placeholder="Enter ID">
			</div> -->
			<br>

			<div class="form-group">
				<label for="gender">Gender:</label><br>
					<select name="gender" class="form-control">
						<option value="Men">Men</option>
					    <option value="Women">Women</option>
					    <option value="Mixed">Mixed</option>
					</select>
			</div>
			<div class="form-group">
				<label for="event">Event:</label><br>
					<select name="event" class="form-control">
						<option value="50m freestyle">50m freestyle</option>
						<option value="100m freestyle">100m freestyle</option>
						<option value="200m freestyle">200m freestyle</option>
						<option value="400m freestyle">400m freestyle</option>
						<option value="800m freestyle">800m freestyle</option>
						<option value="1500m freestyle">1500m freestyle</option>
						<option value="50m backstroke">50m backstroke</option>
						<option value="100m backstroke">100m backstroke</option>
						<option value="200m backstroke">200m backstroke</option>
						<option value="50m breaststroke">50m breaststroke</option>
						<option value="100m breaststroke">100m breaststroke</option>
						<option value="200m breaststroke">200m breaststroke</option>
						<option value="50m butterfly">50m butterfly</option>
						<option value="100m butterfly">100m butterfly</option>
						<option value="200m butterfly">200m butterfly</option>
						<option value="200m IM">200m IM</option>
						<option value="400m IM">400m IM</option>
						<option value="400m freestyle relay">400m freestyle relay</option>
						<option value="800m freestyle relay">800m freestyle relay</option>
						<option value="400m medley relay">400m medley relay</option>
					</select>
			</div>
			<div class="form-group">
				<label for="time">Time:</label><br>
					<input type="text" name="time" placeholder="Enter time">
			</div>
			<div class="form-group">
				<label for="nation">Nation:</label><br>
				      <select name="nation" class="form-control gds-cr gds-countryflag" country-data-region-id="gds-cr-two" data-language="en" country-data-default-value="US">
				      </select>
			</div>
			<div class="form-group">
				<label for="sname">Name:</label><br>
					<input type="text" name="sname" placeholder="Enter swimmer name">
			</div>
			<div class="form-group">
				<label for="sdate">Date:</label><br>
					<input type="text" name="sdate" placeholder="Enter date of swim">
			</div>
			<div class="form-group">
				<label for="smeet">Meet:</label><br>
					<input type="text" name="smeet" placeholder="Enter meet name">
			</div>
			<div class="form-group">
				<label for="smeetlocation">Location:</label><br>
					<input type="text" name="smeetlocation" placeholder="Enter meet location with city and nation">
			</div>
			<div class="form-group">
				<label for="recordvideo">Video:</label><br>
					<input type="url" name="recordvideo" placeholder="Enter video URL">
			</div>
			<br>
			<input type="submit" name="submit" class="btn btn-primary" value="Submit">

			</div>

		</form>

	</div>

</div>

<style>

</style>
 
</body>

</html>
