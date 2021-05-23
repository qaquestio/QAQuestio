<?php
   include 'de.head.php';
   ?>
<title>QAQuestio | Help</title>
</head>
<body>
   <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="de.privacy.php" target="_blank">[   Datenschutz   ]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="de.about.php" target="_blank">[   About   ]</a>
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
               <h2>Hilfe</h2>
            </td>
         </tr>
         <tr class="noBorder">
            <td></br></td>
         </tr>
         <tr class="noBorder_about">
            <td>
            </br>
            QAQuestio ist eine persönliche Suchmaschine, die Du selbst erstellst.</br>
            </br>
            Um sie zu verwenden </br>
            1.) Gib eine neue Frage ein oder passe eine bereits vorformulierte Frage an (siehe "Bearbeiten")</br>
            </br>
            2.) Gib mindestens zwei Schlüsselwörter (Keywords), oder auch nur Teile dieser Wörter (z.B. "Leichtigkeit" --> "leichti"), aus deiner Frage ein.</br>
            </br>
            Sobald Du diese Frage, oder eine ähnlich formulierte Frage, später in das Suchfeld eingibst, wird Deine persönliche Antwort angezeigt.</br>
            </br>
            3.) Um Deine Fragen zu ordnen, verwende “Rating” und “Favourite”</br>
            </br>
            Im Menü “Bearbeiten” werden Fragen in folgender Reihenfolge angezeigt:</br>
            a) Rating (Bewertung)</br>
            b) Erstell- / Änderungsdatum</br>
            </br>
            Fragen die als Favoriten gekennzeichnet sind, werden auch auf Deiner Startseite angezeigt.</br>
            </br>
            4.) Gib Deine Antwort ein</br>
            </br>
            5.) Drücke auf “Update”</br>
            </br>
            Fertig. Du kannst Diene Fragen und Antworten nun verwenden.</br>
            </br>
            Wenn Du mehr über das Konzept und seinen Nutzen herausfinden möchtest, gehe auf “About”.</br>
            </td>
         </tr>
      </table>
   </div>
   <div style="height: 100px;"></div>
</body>
</html>