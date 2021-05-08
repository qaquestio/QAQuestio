<?php
include 'auth.php';
include 'de.head.php';
?>

<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<title>QAQuestio | Bearbeiten</title>
</head>
<body>
   <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="de.help.php" target="_blank" title="Hilfe" id="nodecoration_black">[  i  ]&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="de.p_view.php">[   Meine Fragen   ]</a>
            <a href="de.start.php">[   Frage mich...   ]</a>
         </div>
      </div>
   </nav>
   <div style="height: 100px;"></div>

   <?php
require 'conn/conn.php';
$id = $_REQUEST['id'];
$uid = $_SESSION['uid'];
$query = "SELECT * FROM data WHERE id='" . $id . "' AND uid='" . $uid . "'";
$result = mysqli_query($conn, $query) or die(mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

   <div style="text-align: justify; font-size: 1.2rem;">

      <?php
$status = "";
if (isset($_POST['new']) && $_POST['new'] == 1) {
    $id = $_REQUEST['id'];
    $question = $_REQUEST['question'];
    $keyw1 = $_REQUEST['keyw1'];
    $keyw2 = $_REQUEST['keyw2'];
    $keyw3 = $_REQUEST['keyw3'];
    $answer = $_REQUEST['answer'];
    $rating = $_REQUEST['rating'];
    $c_date = date("Y-m-d H:i:s");
    $update = "UPDATE data SET question='" . $question . "',
               keyw1='" . $keyw1 . "', keyw2='" . $keyw2 . "', keyw3='" . $keyw3 . "',
               answer='" . $answer . "', rating='" . $rating . "', c_date='" . $c_date . "' WHERE id='" . $id . "'";
    mysqli_query($conn, $update) or die(mysqli_error());
    ?>

      <table class="echo_table">
         <tr>
            <td style="font-family: Roboto;">
               <?php echo 'Eintrag wurde aktualisiert. </br></br></br></br>';?>
            </td>
         </tr>
      </table>
      <?php
} else {
    ?>

   </div>
   <table class="edit_table">
      <tr>
         <td class="menu_title">
            Bearbeiten</br></br>
         </td>
      </tr>
      <tr>
         <td>
            <form name="form" method="post" action="">
               <input type="hidden" name="new" value="1" />
               <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
               <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
               <label style="font-weight: bold;">Deine Frage</label><br />
               <p><input class="edit_input" type="text" name="question" placeholder="Gib hier Deine Frage ein..."
                     required value="<?php echo $row['question']; ?>" /></p>
               </br>
               <label style="font-weight: bold;">Keywords</label><br />
               <p><input class="edit_input" type="text" name="keyw1" placeholder="Gib Keyword 1 ein" required
                     value="<?php echo $row['keyw1']; ?>" /></p>
               </br>
               <p><input class="edit_input" type="text" name="keyw2" placeholder="Gib Keyword 2 ein" required
                     value="<?php echo $row['keyw2']; ?>" /></p>
               </br>
               <p><input class="edit_input" type="text" name="keyw3" placeholder="Leer lassen oder Keyword 3 eingeben"
                     value="<?php echo $row['keyw3']; ?>" /></p>
               </br>
               <label style="font-weight: bold;">Relevanz (1 - 100)</label><br />
               <p><input class="edit_input" type="number" name="rating" placeholder="Gib einen Wert für die Relevanz ein" required
                     value="<?php echo $row['rating']; ?>" /></p>
               </br></br>
               <label style="font-weight: bold;">Deine Antwort</label><br />
               <p style="font-size: 18px;"><textarea name="answer" id="ckeditor" rows="10" cols="100"
                     placeholder="Gib hier Deine Antwort ein..." />
                  <?php echo $row['answer']; ?></textarea>
               </p>
               </br>
               <table>
                  <tr>
                     <td><input name="submit" type="submit" value="Aktualisieren" />
                     </td>
                     <td style="text-align: right; width: 10%;"><a href="de.delete.php?id=<?php echo $row["id"]; ?>
                        "onclick="return  confirm('Eintrag löschen?')" id="nodecoration_black" id="nodecoration_black" style="text-align: right;">Löschen</a>
                     </td>
                  </tr>
               </table>
            </form>
            <div style="height: 100px;"></div>
            <?php
}?>
      </tr>
      </td>
   </table>

   <script>
      ClassicEditor
         .create(document.querySelector('#ckeditor'), {
            ckfinder: {
               uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
            },
            toolbar: ['ckfinder', 'imageUpload', '|', 'link', '|', 'bold', '|', 'undo']
         })
         .catch(function (error) {
            console.error(error);
         });
   </script>

</body>

</html>