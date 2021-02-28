<?php
   include 'head.php';
   ?>
<title>QAQuestio | Help</title>
</head>
<body>
   <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="en.privacy.php" target="_blank">Privacy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="en.about.php" target="_blank">About</a>
         </div>
      </div>
   </nav>
   <div style="height: 100px;"></div>
   <?php
      require 'conn/conn.php';
      ?>
   <div>
      <table class="view_table">
         <tr>
            <td>
               <h2>Help</h2>
            </td>
         </tr>
         <tr class="noBorder">
            <td></br></td>
         </tr>
         <tr class="noBorder_about">
            <td>
            </br>
            QAQuestio is a personal search engine that you create yourself.</br>
            </br>
            To use it </br>
            1.) Enter a new question or adapt a pre-set question (see "Edit")</br>
            </br>
            2.) Enter at least two keywords, or even parts of these words (e.g. "light-heartedness" --> "light") from your question.</br>
            </br>
            As soon as you enter this question in the search field later, your personal answer will be displayed.</br>
            </br>
            3.) To rank your questions, use "Rating" and "Favourite".</br>
            </br>
            In the "Edit" menu, questions are displayed in the following order:</br>
            a) Rating</br>
            b) Creation / Modification date</br>
            </br>
            Questions marked as favorites will also be displayed on your start page.</br>
            </br>
            4.) Enter your answer</br>
            </br>
            5.) Press “Update”</br>
            </br>
            Done. You can now use your questions and answers.</br>
            </br>
            If you want to find out more about the concept and its benefits, go to "About".</br>
            </td>
         </tr>
      </table>
   </div>
   <div style="height: 100px;"></div>
</body>
</html>