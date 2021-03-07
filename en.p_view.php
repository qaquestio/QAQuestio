<?php
include 'auth.php';
include 'en.head.php';
?>

<title>QAQuestio | Print preview</title>
</head>

<body>

<nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="en.start.php">Home</a>
            <a href="en.view.php">View</a>
            <a href="#" onClick="window.print();return false">Print</a>
         </div>
      </div>
   </nav>

   <div style="height: 100px;"></div>
   <?php
require 'conn/conn.php';
?>
   <div id="p_table">
      <h3>Your Questions (sorted by Keywords) / Print preview</br></br></h3>
      <table width="100%" border="1" style="border-collapse:collapse;">
         <thead>
            <tr align="left" style="background-color: rgb(172, 172, 172); padding: 5px;">
               <th><strong>Nr.</strong></th>
               <th><strong>Question</strong></th>
               <th><strong>Keyw1</strong></th>
               <th><strong>Keyw2</strong></th>
               <th><strong></strong></th>
               <th><strong></strong></th>
            </tr>
         </thead>
         <tbody>
            <?php
$uid = $_SESSION['uid'];
$count = 1;
$sel_query = "SELECT * FROM data WHERE uid='$uid' ORDER BY keyw1 asc, keyw2 asc;";
$result = mysqli_query($conn, $sel_query);
while ($row = mysqli_fetch_assoc($result)) {?>
            <tr valign="top" align="left" style="">
               <td width="2%"><?php echo $count; ?></td>
               <td width="68%"><?php echo $row["question"]; ?></td>
               <td width="10%"><?php echo $row["keyw1"]; ?></td>
               <td width="10%"><?php echo $row["keyw2"]; ?></td>
               <td width="5%">
                  <a href="en.edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
               </td>
               <td width="5%">
                  <a href="en.delete.php?id=<?php echo $row["id"]; ?>"onclick="return  confirm('Delete entry?')">Delete</a>
               </td>
            </tr>
            <?php $count++;}?>
         </tbody>
      </table>
   </div>
</body>
</html>
