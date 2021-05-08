<?php
include 'auth.php';
include 'de.head.php';
?>

<title>QAQuestio | Fragenliste</title>
</head>

<body>

<nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="de.view.php">[   Detailansicht   ]&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="#" onClick="window.print();return false">[   Drucken   ]</a>
            <a href="de.new.php">[   Neu   ]</a>
            <a href="de.start.php">[   Frage mich...   ]</a>
         </div>
      </div>
   </nav>

   <div style="height: 100px;"></div>
   <?php
require 'conn/conn.php';
?>
   <div id="p_table">
      <h3>Fragenliste</br></br></h3>
      <a href="de.p_view_count.php" id="nodecoration_black" style="font-weight: bold;">Anzahl der Aufrufe&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</a> 
      <a href="de.p_view.php" id="nodecoration_black">Letzter Aufruf&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</a> 
      <a href="de.p_view_rating.php" id="nodecoration_black">Rating</a></br>
      </br>
      <table width="100%" border="1" style="border-collapse:collapse;">
         <thead>
            <tr align="left" style="background-color: rgb(172, 172, 172); padding: 5px;">
               <th><strong>Nr.</strong></th>
               <th><strong>Frage</strong></th>
               <th><strong>Keyw1</strong></th>
               <th><strong>Keyw2</strong></th>
               <th><strong>%</strong></th>
               <th><strong></strong></th>
               <th><strong></strong></th>
            </tr>
         </thead>
         <tbody>
            <?php
$uid = $_SESSION['uid'];
$count = 1;
$sel_query = "SELECT * FROM data WHERE uid='$uid' ORDER BY percent desc, keyw1 asc, keyw2 asc;";
$result = mysqli_query($conn, $sel_query);
while ($row = mysqli_fetch_assoc($result)) {?>
            <tr valign="top" align="left" style="">
               <td width="2%"><?php echo $count; ?></td>
               <td width="66%"><?php echo $row["question"]; ?></td>
               <td width="10%"><?php echo $row["keyw1"]; ?></td>
               <td width="10%"><?php echo $row["keyw2"]; ?></td>
               <td width="2%"><?php echo $row["percent"]; ?></td>
               <td width="5%">
                  <a href="de.edit.php?id=<?php echo $row["id"]; ?>">Bearbeiten</a>
               </td>
               <td width="5%">
                  <a href="de.delete.php?id=<?php echo $row["id"]; ?>"onclick="return  confirm('Eintrag löschen?')">Löschen</a>
               </td>
            </tr>
            <?php $count++;}?>
         </tbody>
      </table>
   </div>

</body>
</html>
