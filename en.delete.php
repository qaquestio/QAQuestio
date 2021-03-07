<?php
include 'auth.php';
include 'en.head.php';
?>

<title>Delete Record</title>
</head>
<body>
<nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="en.start.php">Home</a>
            <a href="en.view.php">View</a>
         </div>
      </div>
   </nav>
   <div style="height: 100px;"></div>
   
   <table class="edit_table">
      <tr>
         <td class="echo_bold">
            <?php
require 'conn/conn.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM data WHERE id=$id";
if (mysqli_query($conn, $query)) {
    $status = "Record deleted.</br></br>";
    echo '<p>' . $status . '</p>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
         </td>
      </tr>
   </table>
</body>
</html>
