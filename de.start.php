<?php
include 'auth.php';
include 'de.head.php';
?>
<title>QAQuestio</title>
</head>

<body>
   <div class="container">

      <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="de.help.php" target="_blank" title="Help" id="nodecoration_black">[  i  ]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="logout.php">[   Logout   ]</a>
            <a href="de.p_view.php">[   Liste   ]</a>
            <a href="de.start_fav.php">[  Fav   ]</a> 
            
         </div>
      </div>
      </nav>
      <ul class="scroller">
      <li id="home">
         <table class="qaquest_table">
            <tr>
               <td style="height: 200px;">
               </td>
            </tr>
            <tr style="vertical-align: top;">
            <td>
            <h1>QAQ</h1>
                  </br></br>
                  <form id="frm" action="de.echo.php" method="get" accept-charset="utf-8">
                     <input class="qaquest_input" name="question" placeholder="..."/>
                  </form>
               </td>
            </tr>
         </table>
      </li>
      <?php
require 'conn/conn.php';
?>
      <?php
$uid = $_SESSION['uid'];
$count = 1;
$sel_query = "SELECT * FROM data WHERE uid='$uid' AND fav=1 ORDER BY rating desc";
$result = mysqli_query($conn, $sel_query);
while ($row = mysqli_fetch_assoc($result)) {?>
      <li>
         <p></br></br>
         <?php echo $row["question"]; ?></br>
         </br>
         *</p>
      </li>
      <?php $count++;}?>

      <li id="about">
         <?php include 'de.footer.php';?>
      </li>
   </ul>
</div>

</body>
</html>
