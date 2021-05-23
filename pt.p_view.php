<?php
include 'auth.php';
include 'pt.head.php';
?>

<title>QAQuestio | Lista de perguntas</title>
</head>

<body>

<nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="#" onClick="window.print();return false">[   Imprimir   ]&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="pt.new.php">[   Novo   ]</a>
            <a href="pt.start.php">[   Me pergunte...   ]</a>
         </div>
      </div>
   </nav>

   <div style="height: 100px;"></div>
   <?php
require 'conn/conn.php';
?>
   <div id="p_table">
      <h3>Lista de perguntas</br></br></h3>
      <a href="pt.p_view.php" id="nodecoration_black" style="font-weight: bold;">Contagem de visitas&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</a> 
      <a href="pt.p_view_last.php" id="nodecoration_black">Última visita&nbsp;&nbsp;&nbsp;&nbsp;</a> 
      </br></br>
      <table width="100%" border="1" style="border-collapse:collapse;">
         <thead>
            <tr align="left" style="background-color: rgb(172, 172, 172); padding: 5px;">
               <th><strong>Nr.</strong></th>
               <th><strong>Pergunta</strong></th>
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
                  <a href="pt.edit.php?id=<?php echo $row["id"]; ?>">Editar</a>
               </td>
               <td width="5%">
                  <a href="pt.delete.php?id=<?php echo $row["id"]; ?>"onclick="return  confirm('Deletar item?')">Deletar</a>
               </td>
            </tr>
            <?php $count++;}?>
         </tbody>
      </table>
   </div>

</body>
</html>
