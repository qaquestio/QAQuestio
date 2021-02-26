<?php
   include 'head.php';
   ?>
<title>QAQuestio | Help</title>
</head>
<body>
   <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="pt.privacy.php" target="_blank">Privacidade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="pt.about.php" target="_blank">About</a>
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
               <h2>Ajuda</h2>
            </td>
         </tr>
         <tr class="noBorder">
            <td></br></td>
         </tr>
         <tr class="noBorder_about">
            <td>
            </br>
            QAQuestio é um "site de busca" pessoal que você mesmo vai criar. </br>
            </br>
            Para usa-lo </br>
            1.) Digite uma pergunta nova ou modifique uma pergunta pré-formulada (veja "Editar")</br>
            </br>
            2.) Coloque pelo menos duas palavras chaves (Keywords) de sua pergunta. (veja perguntas pré-formuladas)</br>
            </br>
            E assim que você inserir esta pergunta no campo de busca, a sua resposta pessoal será exibida.</br>
            </br>
            3.) Para priorizar suas perguntas use “Rating” e “Favourite”</br>
            </br>
            No Menu “Edit” as respostas aparecem na seguinte ordem:</br>
            a) Rating (Avaliação)</br>
            b) Data de criação / Modificação</br>
            </br>
            Perguntas marcadas como favoritas também aparecerão na sua página inicial.</br>
            </br>
            4.) Digite sua resposta</br>
            </br>
            5.) Clique em “Update”</br>
            </br>
            Pronto. Agora suas perguntas e respostas estão prontas para usá-las quando quiser.</br>
            </br>
            Para mais informações sobre o conceito e a utilidade disso veja “About”.</br>

            </td>
         </tr>
      </table>
   </div>
   <div style="height: 100px;"></div>
</body>
</html>