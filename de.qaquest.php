<?php include 'head.php';?>

<title>QAQuestio</title>
</head>
<body>
<div class="container">
   <nav class="navbar" >
      <div class="topnav">
         <div class="topnav-right">
            <a href="en.qaquest.php">EN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="login.php">Login</a>
         </div>
      </div>
   </nav>
   <ul class="scroller">
      <li id="home">
         <table class="qaquest_table">
            <tr style="vertical-align: top; align: center;">
               <td style="text-align: center;">
                  <h1>QAQuestio</h1>
                  </br></br>
                  <form id="frm" action="qaquest_echo.php" method="get" accept-charset="utf-8">
                     <input class="qaquest_input" name="question" placeholder="Scrolle nach unten, um mehr zu erfahren..."/>
                  </form>
               </td>
            </tr>
         </table>
      </li>
      <li>
         <p></br></br>
         Halte einen Moment inne.</br>
         </br>
         *</p>
      </li>
      <li>
         <p></br></br>
         Nimm ein Blatt Papier.</br>
         </br>
         *</p>
      </li>
      <li>
         <p></br></br>
         Was möchtest Du heute tun? Gibt es etwas, worauf Du Dich freust?</br>
         </br>
         *</p>
      </li>
<!-- 
      <li>
         <p></br></br>
         *</p>
      </li> -->

      <?php include 'de.footer.php';?>
      
      <li>
         <p></br></br>
         <a href="register.php" target="_blank" title="Register" id="nodecoration_black">Möchtest Du mehr erfahren?</a></br>
         </br>
         *</p>
      </li>

      <li>

      </li>


   </ul>
</div>
</body>
</html>
