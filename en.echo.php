<?php
include 'auth.php';
include 'en.head.php';
?>

<title>QAQuestio | Echo</title>
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
$sql = "SELECT answer, id, v_count FROM data WHERE uid='$uid'
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
            <a href="en.edit.php?id=<?php echo $row["id"]; ?>">[   Edit   ]&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="en.start.php">[   Home   ]</a>
         </div>
      </div>
      </nav>
	<div style="height: 100px;"></div>
  <table class="echo_table">
    <tr>
      <td class="echo">
	<?php
         
         $timestamp = time();

         $v_count = $row["v_count"]+1;
         $id = $row["id"];
         $update = "UPDATE data SET v_count='" . $v_count . "', lastdate='" . $timestamp . "' WHERE id='" . $id . "'";
         mysqli_query($conn, $update) or die(mysqli_error());

         $result_sum = mysqli_query($conn, 'SELECT SUM(v_count) AS value_sum FROM data'); 
         $column_sum = mysqli_fetch_assoc($result_sum); 
         $sum = $column_sum['value_sum'];

         $update_percent = "UPDATE data SET percent = v_count * 100 / $sum ";
         mysqli_query($conn, $update_percent) or die(mysqli_error());

         echo nl2br($row["answer"]) . "</br>";
      
    } 
} else { ?>
   </td>
    </tr>
  <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
           
            <a href="en.p_view.php">[   List   ]&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="en.start.php">[   Home   ]</a>

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