<?php
include 'auth.php';
include 'head.php';
?>
<title>QAQuestio | View Records</title>
</head>
<body>
   <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="de.start.php">Home</a>
            <a href="de.help.php" target="_blank" title="Help" id="nodecoration_black">( i )</a>
            <a href="de.new.php">Neu</a>
            <a href="de.p_view.php">Liste</a>
         </div>
      </div>
   </nav>
   <div style="height: 100px;"></div>
   <?php
require 'conn/conn.php';
?>
   <div>
      <table class="view_table">
         <thead>
         <tr>
         <td>
            <h1>QAQuestio</h1>
         </td>
      </tr>
            <tr>
               <td class="menu_title">
               </br>
                  Deine Fragen
               </td>
            </tr>
         </thead>
         <tbody>
            <?php
$uid = $_SESSION['uid'];
$count = 1;
$sel_query = "SELECT * FROM data WHERE uid='$uid' ORDER BY rating desc, c_date desc, keyw1 asc, keyw2 asc;";
$result = mysqli_query($conn, $sel_query);
while ($row = mysqli_fetch_assoc($result)) {?>
            <tr class="noBorder">
               <td></br></td>
            </tr>
            <tr class="noBorder">
               <td style="background-color: rgb(172, 172, 172); padding: 5px;" colspan="7">Q: <?php echo $row["question"]; ?>
               </td>
            </tr>
            <tr class="noBorder">
               <td></br></td>
            </tr>
            <tr class="noBorder">
               <td><a href="de.edit.php?id=<?php echo $row["id"]; ?>">Bearbeiten</a></td>
               <td><a href="de.delete.php?id=<?php echo $row["id"]; ?>" onclick="return  confirm('Eintrag löschen?')">Löschen</a></td>
            </tr>
            <tr class="noBorder">
               <td></br></td>
            </tr>
            <tr valign="top" align="left" class="noBorder">
               <td colspan="7" width="100%"><?php echo $row["answer"]; ?></br>
               </td>
            </tr>
            
            <?php $count++;}?>
         </tbody>
      </table>
   </div>
   <div style="height: 100px;"></div>
</body>
</html>