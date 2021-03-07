<?php
include 'auth.php';
include 'en.head.php';
?>

<title>Echo</title>
</head>

<body>
<div style="height: 100px;"></div>
<div>
<table width="100%">
<tr>
<td>
<?php
require 'conn/conn.php';

// Retrieve the form data
$question = $_GET['question'];
$uid = $_SESSION['uid'];

//Query and output
$sql = "SELECT answer, id FROM data
WHERE uid='$uid'
AND '$question' LIKE CONCAT('%', keyw1, '%')
AND '$question' LIKE CONCAT('%', keyw2, '%')
AND '$question' LIKE CONCAT('%', keyw3, '%')";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {?>
   <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="en.start.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="en.edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
         </div>
      </div>
      </nav>
	<div style="height: 100px;"></div>
  <table class="echo_table">
    <tr>
      <td class="echo">
	<?php echo nl2br($row["answer"]) . "<br>";
    }
} else { ?>


  <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="en.start.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="en.p_view.php">List</a>
         </div>
      </div>
      </nav>
      <div style="height: 100px;"></div>
  <table class="echo_table">
    <tr>
      <td class="echo_bold">
  <?php echo "No or multiple answers found. </br>
               Review your entries (see &quotList&quot).";
}
$conn->close();
?>
</td>

</tr>
</table>

</div>
</body>
</html>
