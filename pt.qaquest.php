<?php include 'head.php';?>

<title>QAQuestio</title>
</head>
<body>
<div class="container">
   <nav class="navbar">
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
            <tr style="vertical-align: top;">
               <td>
               <h1>QAQuestio</h1>
                  </br></br>
                  <form id="frm" action="qaquest_echo.php" method="get" accept-charset="utf-8">
                     <input class="qaquest_input" name="question" placeholder="Role o mouse para baixo para descobrir mais..."/>
                  </form>
               </td>
            </tr>
         </table>
      </li>
      <li>
         <p></br></br>
         Pare por um momento.</br>
         </br>
         *</p>
      </li>
      <li>
         <p></br></br>
         Pegue um folha de papel.</br>
         </br>
         *</p>
      </li>
      <li>
         <p></br></br>
         O que você quer fazer hoje? Há algo pelo qual já você está ansioso em realizar?</br>
         </br>
         *</p>
      </li>
      
     <!--  <li>
         <p></br></br>
         *</p>
      </li> -->

      <?php include 'pt.footer.php';?>

      <li>
         <p></br></br>
         <a href="register.php" target="_blank" title="Register" id="nodecoration_black">Quer saber mais?</a></br>
         </br>
         *</p>
      </li>

      <li>
      
      </li>

   </ul>
</div>
</body>
</html>
