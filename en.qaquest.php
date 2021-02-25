<?php include 'head.php';?>

<title>QAQuestio</title>
</head>
<body>
<div class="container">
   <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="login.php">Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
         </div>
      </div>
   </nav>
   <ul class="scroller">
      <li id="home">
         <table class="qaquest_table">
            <tr style="vertical-align: top;">
               <td>
               <h1>QAQuestio</h1>
                  </br></br>
                  <form id="frm" action="qaquest_echo.php" method="get" accept-charset="utf-8">
                     <input class="qaquest_input" name="question" placeholder="Scroll down to find out more..."/>
                  </form>
               </td>
            </tr>
         </table>
      </li>
      <li>
         <p></br></br>
         Take a moment.</br>
         </br>
         *</p>
      </li>
      <li>
         <p></br></br>
         Take a blank sheet of paper.</br>
         </br>
         *</p>
      </li>
      <li>
         <p></br></br>
            What do you want to do today? Is there something you are looking forward to?</br>
         </br>
         *</p>
      </li>

      <!-- <li>
         <p></br></br>
         *</p>
      </li> -->
      
      <?php include 'en.footer.php';?>

      <li>
         <p></br></br>
          <a href="register.php" target="_blank" title="Register" id="nodecoration_black">Want to know more?</a></br>
         </br>
         *</p>
      </li>

      <li>

      </li>

   </ul>
</div>
</body>
</html>
