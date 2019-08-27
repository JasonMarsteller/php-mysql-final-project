<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8"/>
 <title>Swimming World Record Entry</title>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript"> </script>
<script src="sorttable.js"></script>

    <!-- link for jquery style -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
        <script src="country-region-dropdown-menu-master/assets/js/geodatasource-cr.min.js"></script>
    <link rel="stylesheet" href="country-region-dropdown-menu-master/assets/css/geodatasource-countryflag.css">
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/en/LC_MESSAGES/en.po" />
    <script type="text/javascript" src="country-region-dropdown-menu-master/assets/js/Gettext.js"></script>

 <div class="topnav">
  <a href="/PHPFinal/swimming-world-records.php">Home</a>
  <a href="/PHPFinal/swimming-world-records-men.php">Men</a>
  <a href="/PHPFinal/swimming-world-records-women.php">Women</a>
  <a href="/PHPFinal/swimming-world-records-mixed.php">Mixed</a>
  <a href="/PHPFinal/swimming-world-records-swimmer.php">Swimmer</a>
  <a href="/PHPFinal/swimming-world-records-nation.php">Nation</a>
    <div class="search-container">  
      <form action="search.php" method="POST">
       <input type="search" name="swimmer" placeholder="Search by Swimmer"/>
       <input type="submit" name="searchswimmer" value="Go">
      </form>
    </div>
    <div class="search-container">  
      <form action="search.php" method="POST">
       <input type="search" name="nation" placeholder="Search by Nation"/>
       <input type="submit" name="searchnnation" value="Go">
      </form>
    </div>
</div>

<style>

/* Add a black background color to the top navigation */
.topnav {
  background-color: lightblue;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: black;
  font-weight:bold;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: lightblue;
  color: white;
}

/* Style the search box inside the navigation bar */

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

</style>

</head>
