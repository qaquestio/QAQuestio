<?php
include 'auth.php';
include 'pt.head.php';
?>
<title>QAQuestio | Fav</title>
</head>

<body>
   <div class="container">

      <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="pt.help.php" target="_blank" title="Help" id="nodecoration_black">[  i  ]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="logout.php">[   Logout   ]</a>
            <a href="pt.p_view.php">[   Lista   ]</a>
            <a href="pt.start.php">[   Home   ]</a> 
            
         </div>
      </div>
      </nav>
      <div style="height: 200px;"></div>
   <?php
require 'conn/conn.php';
?>
   <div id="p_table">
     
      </br>
      <table width="100%" border="0" style="border-collapse:collapse;">
         <thead>
            <tr>
               <th><strong></strong></th>
               <th><strong></strong></th>
               <th><strong></strong></th>
            </tr>
         </thead>
         <tbody>
            <?php
               $uid = $_SESSION['uid'];
               $sel_query = "SELECT * FROM data WHERE uid='$uid' AND fav='1' ORDER BY percent desc;";
               $result = mysqli_query($conn, $sel_query);
               while ($row = mysqli_fetch_assoc($result)) {?>
            <tr td style="padding-bottom: 20px;">
               <td width="40%"></td>
               <td class="echo" width="30%" style="padding-bottom: 20px;">
               <a href="pt.echo.php?question=<?php echo $row["keyw1"], $row["keyw2"], $row["keyw3"]; ?> "id="nodecoration_black" style="text-align: left;"><?php echo $row["question"]; ?></a>
               </td>
               <td width="30%"></td>
               
            </tr>
            <?php }?>
         </tbody>
      </table>
   </div>

</body>
</html>
