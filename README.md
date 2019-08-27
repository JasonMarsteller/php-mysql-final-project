# Synopsis

## PHP and MySQL Final Project for Southwest Tech Web Development Program

This is my final project for my [Southwest Tech Web Development Specialist](https://stech.edu/programs/computer-science/web-development-specialist/) PHP and MySQL class.  It is a PHP-built form/spreadsheet for viewing, sorting, searching and inserting Swimming World Records.  I used information learned both from my textbook "PHP and MySQL Web Development" written by Luke Welling and Laura Thompson.  I also used information learned from the the excellent Udemy "PHP for Beginners - Become a PHP Master - CMS Project" taught by Edwin Diaz. I also used the Country-Region Dropdown Menu (Free) JS plugin as provided by the GeoDataSource website. Additionally, I used the sorttable.js plugin to make sorting simpler. 

### Credited Links:

[PHP and MySQL Web Development](http://www.informit.com/store/php-and-mysql-web-development-9780321833891),

[PHP for Beginners - Become a PHP Master - CMS Project](https://www.udemy.com/php-for-complete-beginners-includes-msql-object-oriented/),

[Country-Region Dropdown Menu (Free)](https://www.geodatasource.com/software/country-region-dropdown-menu),

[sorttable: Make all your tables sortable](https://kryogenix.org/code/browser/sorttable/),

### Functions

This is the first project I have created using a separate functions.php file.  I had previously only used functions within javascript tags found either within a js file or within HTML specifically.  I found the process of keeping all of the functions in one place freeing.  Originally, I hated the concent of refactoring and keeping things in separate places.  But, having worked on this project for several hours, it was amazing how much simpler it was once I understood the entire point of having a separate functions file and calling the function wherever I wanted to use it. 

### updateRecords()

The updateRecords() function was the one I spent the most time on.  I learned a lot from this process, including engaging the StackOverflow community at times. An earlier version of the function required the user to know and pick the proper RecordID so that the function would overwrite the correct item in the data base.  Knowing that this database would only require 42 total entries, I wanted to make it easier to select by Gender and Event to be able to overwrite the correct RecordID.  As you can see below, there is a massive if else if setup that I updated on StackOverflow. [How to Associate and Insert Multiple Predetermined MySQL Fields to Single Select Dropdown Option](https://stackoverflow.com/questions/57190337/how-to-associate-and-insert-multiple-predetermined-mysql-fields-to-single-select).  Additionally, I have another if statement that autofills the VideoURL with a fun video link of the user does not enter a video link during the update process. 

```
function updateRecords() {
	if(isset($_POST['submit'])) {
		global $connection;
		$gender = $_POST['gender'];
		$eventname = $_POST['event'];
		$time = $_POST['time'];
		$nation = $_POST['nation'];		
		$sname = $_POST['sname'];
		$sdate = $_POST['sdate'];
		$smeet = $_POST['smeet'];
		$smeetlocation = $_POST['smeetlocation'];
		$nation = $_POST['nation'];
		$recordvideo = $_POST['recordvideo'];				

		if ($gender == "Men" && $eventname == "50m freestyle") {
			$id = "1";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "100m freestyle") {
			$id = "2";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "200m freestyle") {
			$id = "3";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "400m freestyle") {
			$id = "4";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "800m freestyle") {
			$id = "5";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "1500m freestyle") {
			$id = "6";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "50m backstroke") {
			$id = "7";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "100m backstroke") {
			$id = "8";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "200m backstroke") {
			$id = "9";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "50m breaststroke") {
			$id = "10";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "100m breaststroke") {
			$id = "11";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "200m breaststroke") {
			$id = "12";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "50m butterfly") {
			$id = "13";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "100m butterfly") {
			$id = "14";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "200m butterfly") {
			$id = "15";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "200m IM") {
			$id = "16";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "400m IM") {
			$id = "17";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "400m freestyle relay") {
			$id = "18";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "800m freestyle relay") {
			$id = "19";
			$gender = "Men";
		} else if ($gender == "Men" && $eventname == "400m medley relay") {
			$id = "20";
			$gender = "Men";
		} else if ($gender == "Women" && $eventname == "50m freestyle") {
			$id = "21";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "100m freestyle") {
			$id = "22";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "200m freestyle") {
			$id = "23";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "400m freestyle") {
			$id = "24";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "800m freestyle") {
			$id = "25";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "1500m freestyle") {
			$id = "26";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "50m backstroke") {
			$id = "27";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "100m backstroke") {
			$id = "28";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "200m backstroke") {
			$id = "29";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "50m breaststroke") {
			$id = "30";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "100m breaststroke") {
			$id = "31";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "200m breaststroke") {
			$id = "32";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "50m butterfly") {
			$id = "33";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "100m butterfly") {
			$id = "34";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "200m butterfly") {
			$id = "35";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "200m IM") {
			$id = "36";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "400m IM") {
			$id = "37";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "400m freestyle relay") {
			$id = "38";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "800m freestyle relay") {
			$id = "39";
			$gender = "Women";
		} else if ($gender == "Women" && $eventname == "400m medley relay") {
			$id = "40";
			$gender = "Women";
		} else if ($gender == "Mixed" && $eventname == "400m freestyle relay") {
			$id = "41";
			$gender = "Mixed";
		} else if ($gender == "Mixed" && $eventname == "400m medley relay") {
			$id = "42";
			$gender = "Mixed";
		}

		if ($recordvideo == "") {
			$recordvideo = "https://youtu.be/dQw4w9WgXcQ";
		}

		$gender = mysqli_real_escape_string($connection, $gender);
		$eventname = mysqli_real_escape_string($connection, $eventname);
		$time = mysqli_real_escape_string($connection, $time);
		$nation = mysqli_real_escape_string($connection, $nation);
		$sname = mysqli_real_escape_string($connection, $sname);
		$sdate = mysqli_real_escape_string($connection, $sdate);
		$smeet = mysqli_real_escape_string($connection, $smeet);
		$smeetlocation = mysqli_real_escape_string($connection, $smeetlocation);
		$nation = mysqli_real_escape_string($connection, $nation);
		$recordvideo = mysqli_real_escape_string($connection, $recordvideo);

		$query = "UPDATE `records` SET ";
		$query .= "Gender = '$gender', ";
		$query .= "EventName = '$eventname', ";
		$query .= "Time = '$time', ";
		$query .= "NationName = '$nation', ";
		$query .= "SwimmerName = '$sname', ";
		$query .= "Date = '$sdate', ";	
		$query .= "MeetName = '$smeet', ";
		$query .= "MeetLocation = '$smeetlocation', ";
		$query .= "VideoURL = '$recordvideo' ";
		$query .= "WHERE RecordID = $id ";

		$result = mysqli_query($connection, $query);
			if(!$result) {
				die("Query failed." . mysqli_error($connection));
			} else {
				echo "Record updated!";
			}
	}
}
```

### showRecords()

showRecords() took a surprisingly long time to figure out how to properly concatenate the MySQL query into an HTML table.  Understanding how to make one of the cells an a href link within the while loop required a lot of research on how exactly where to put the ' and " characters to make everything work.  Additionally, researching how to add a class value to the entire table, which required " " around the entire echo with a ' ' around the class took awhile to figure out as typically a class requires " " around it in HTML. 

```
function showRecords() {
	global $connection;
	$query = "SELECT RecordID, Gender, EventName, Time, SwimmerName, NationName, Date, MeetName, MeetLocation, VideoURL FROM records";
	$result = mysqli_query($connection, $query);

		if ($result->num_rows > 0) {
			echo "<table class='sortable'><tr><th>Gender</th><th>Event</th><th>Time</th><th>Swimmer</th><th>Nation</th><th>Date</th><th>Meet</th><th>Location</th><th>Video</th></tr>";
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$o = '<tr><td>' . $row["Gender"]. '</td><td>' . " " . $row["EventName"]. '</td><td>' . " " . $row["Time"]. '</td><td>' . " " . $row["SwimmerName"]. '</td><td>' . " " . $row["NationName"]. '</td><td>' . " " . $row["Date"]. '</td><td>' . " " . $row["MeetName"]. '</td><td>' . " " . $row["MeetLocation"]. '</td><td><a href="'.$row["VideoURL"].'"target="_blank">'."Video".'</a></td></tr>';
		        echo $o;
		    }
		    echo "</table>";
		} 	else {
		    echo "0 results";
			}
}
```

### Search Functions

Upon initial submission, my professors requested a search bar be added to the project.  I used the follow codes to create a Search by Swimmer and Search by Nation search bar as part of the top navbar. Note the requirement to use the mysqli_real_scape_string on the search content to prohibit an SQL Injection attempt. 

```
function searchSwimmer() {
    if(isset($_POST['searchswimmer'])) {
	global $connection;
        $ssearch = $_POST['swimmer'];
	$ssearch = mysqli_real_escape_string($connection, $ssearch);
	$query = "SELECT RecordID, Gender, EventName, Time, SwimmerName, NationName, Date, MeetName, MeetLocation, VideoURL FROM records WHERE SwimmerName LIKE '%$ssearch%'";
	$result = mysqli_query($connection, $query);

		if ($result->num_rows > 0) {
		    echo "<table class='sortable'><tr><th>Gender</th><th>Event</th><th>Time</th><th>Swimmer</th><th>Nation</th><th>Date</th><th>Meet</th><th>Location</th><th>Video</th></tr>";
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$o = '<tr><td>' . $row["Gender"]. '</td><td>' . " " . $row["EventName"]. '</td><td>' . " " . $row["Time"]. '</td><td>' . " " . $row["SwimmerName"]. '</td><td>' . " " . $row["NationName"]. '</td><td>' . " " . $row["Date"]. '</td><td>' . " " . $row["MeetName"]. '</td><td>' . " " . $row["MeetLocation"]. '</td><td><a href="'.$row["VideoURL"].'"target="_blank">'."Video".'</a></td></tr>';
		        echo $o;
		    }
		    echo "</table>";
		} 	else {
		    echo "0 results";
			}
    }
}

function searchNation() {
if(isset($_POST['searchnnation'])) {
	global $connection;
        $ssearch = $_POST['nation'];
	$ssearch = mysqli_real_escape_string($connection, $ssearch);
	$query = "SELECT RecordID, Gender, EventName, Time, SwimmerName, NationName, Date, MeetName, MeetLocation, VideoURL FROM records WHERE NationName LIKE '%$ssearch%'";
	$result = mysqli_query($connection, $query);

		if ($result->num_rows > 0) {
		    echo "<table class='sortable'><tr><th>Gender</th><th>Event</th><th>Time</th><th>Swimmer</th><th>Nation</th><th>Date</th><th>Meet</th><th>Location</th><th>Video</th></tr>";
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$o = '<tr><td>' . $row["Gender"]. '</td><td>' . " " . $row["EventName"]. '</td><td>' . " " . $row["Time"]. '</td><td>' . " " . $row["SwimmerName"]. '</td><td>' . " " . $row["NationName"]. '</td><td>' . " " . $row["Date"]. '</td><td>' . " " . $row["MeetName"]. '</td><td>' . " " . $row["MeetLocation"]. '</td><td><a href="'.$row["VideoURL"].'"target="_blank">'."Video".'</a></td></tr>';
		        echo $o;
		    }
		    echo "</table>";
		} 	else {
		    echo "0 results";
			}
    }
}
```
