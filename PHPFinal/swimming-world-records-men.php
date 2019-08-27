<?php include "db.php";?>
<?php include "header.php";?>
<?php include "functions.php";?>

<body>

<h1>Swimming World Records</h1>
<?php showMen();?>

<style>

td {
    font-family:Arial, sans-serif;
    font-size:14px;
    padding:10px 5px;
    border-style:solid;
    border-width:1px;
    overflow:hidden;
    word-break:normal;
    border-color:black;
}
th {
    font-family:Arial, sans-serif;
    font-size:14px;
    font-weight:bold;
    padding:10px 5px;
    border-style:solid;
    border-width:1px;
    overflow:hidden;
    word-break:normal;
    border-color:black;
    background-color:lightblue;
}


</style>
 
</body>

<?php include "footer.php";?>

</html>