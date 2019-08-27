<?php include "db.php";?>

<?php

function showAllData() {
	global $connection;
	$query = "SELECT * FROM records";
	$result = mysqli_query($connection, $query);
		if(!$result) {
			die("Query failed." . mysqli_error());
		}

		while($row = mysqli_fetch_assoc($result)) {
			$id = $row['RecordID'];
				echo "<option value='$id'>$id</option>";
		}
}

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

function showMen() {
	global $connection;
	$query = "SELECT RecordID, Gender, EventName, Time, SwimmerName, NationName, Date, MeetName, MeetLocation, VideoURL FROM records WHERE Gender = 'Men'";
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

function showWomen() {
	global $connection;
	$query = "SELECT RecordID, Gender, EventName, Time, SwimmerName, NationName, Date, MeetName, MeetLocation, VideoURL FROM records WHERE Gender = 'Women'";
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

function showMixed() {
	global $connection;
	$query = "SELECT RecordID, Gender, EventName, Time, SwimmerName, NationName, Date, MeetName, MeetLocation, VideoURL FROM records WHERE Gender = 'Mixed'";
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

function showSwimmer() {
	global $connection;
	$query = "SELECT RecordID, Gender, EventName, Time, SwimmerName, NationName, Date, MeetName, MeetLocation, VideoURL FROM records ORDER BY SwimmerName ASC";
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

function showNation() {
	global $connection;
	$query = "SELECT RecordID, Gender, EventName, Time, SwimmerName, NationName, Date, MeetName, MeetLocation, VideoURL FROM records ORDER BY NationName ASC";
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

?>