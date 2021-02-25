<?php
include 'auth.php';
include 'head.php';
?>

<title>QAQuest | Visualização de impressão</title>
</head>

<body>

<nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="pt.start.php">Home</a>
            <a href="pt.view.php">Visão geral</a>
            <a href="#" onClick="window.print();return false">Imprimir</a>
         </div>
      </div>
   </nav>

   <div style="height: 100px;"></div>
   <?php
require 'conn/conn.php';
?>
   <div>
      <h3>Suas Perguntas / Visualização de impressão</br></br></h3>
      <table width="100%" border="1" style="border-collapse:collapse;">
         <thead>
            <tr align="left" style="background-color: rgb(172, 172, 172); padding: 5px;">
               <th><strong>Nr.</strong></th>
               <th><strong>Question</strong></th>
               <th><strong></strong></th>
               <th><strong></strong></th>
            </tr>
         </thead>
         <tbody>
            <?php
$uid = $_SESSION['uid'];
$count = 1;
$sel_query = "SELECT * FROM data WHERE uid='$uid' ORDER BY rating desc, keyw1 asc, keyw2 asc;";
$result = mysqli_query($conn, $sel_query);
while ($row = mysqli_fetch_assoc($result)) {?>
            <tr valign="top" align="left" style="">
               <td width="10px"><?php echo $count; ?></td>
               <td width="75%"><?php echo $row["question"]; ?></td>
               <td width="20px">
                  <a href="pt.edit.php?id=<?php echo $row["id"]; ?>">Editar</a>
               </td>
               <td width="20px">
                  <a href="pt.delete.php?id=<?php echo $row["id"]; ?>"onclick="return  confirm('Deletar item?')">Deletar</a>
               </td>
            </tr>
            <?php $count++;}?>
         </tbody>
      </table>
   </div>
</body>
</html>
