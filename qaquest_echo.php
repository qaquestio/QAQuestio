<?php include ('head.php'); ?>

</head>
<body>
<?php



$a = $_GET['question'];

// What is this?
$gqh_010_e = "What is this?";
$gqh_010_d = "Was ist das?";
$gqh_010_pt = "O que é isso?";

if (preg_match('/^(?=.*what is)/i', $a) ||
	preg_match('/^(?=.*was ist das)/i', $a) ||
  preg_match('/^(?=.*que é)/i', $a) ||

  preg_match('/^(?=.*hello)/i', $a) ||
  preg_match('/^(?=.*hallo)/i', $a) ||
  preg_match('/^(?=.*oi)/i', $a) ||

  preg_match('/^(?=.*about)/i', $a) ||

  preg_match('/^(?=.*use)/i', $a) ||
  preg_match('/^(?=.*verwende)/i', $a) ||
  preg_match('/^(?=.*usar)/i', $a) ||
  
  preg_match('/^(?=.*how does)/i', $a) ||
  preg_match('/^(?=.*wie funktioniert)/i', $a) ||
  preg_match('/^(?=.*como funciona)/i', $a))

  {
    echo "<script>location.href='/#about';</script>";
    exit;
  }
  else {
   echo "<script>location.href='index.php';</script>";
  }
?>
         </td>
         </tr>
         </table>
   </div>
</body>
</html>
