<?php
include 'auth.php';
include 'de.head.php';
?>

<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<title>QAQuestio | Erstellen</title>
</head>
<body>

<nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="de.help.php" target="_blank" title="Help" id="nodecoration_black">[  i  ]&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="de.p_view.php">[   Meine Fragen   ]</a>
            <a href="de.start.php">[   Frage mich...   ]</a>
         </div>
      </div>
   </nav>
   <div style="height: 100px;"></div>
   <?php require 'conn/conn.php';?>
   
      <div style="text-align: center; font-size: 1.2rem;">

            <?php
$status = "";
if (isset($_POST['new']) && $_POST['new'] == 1) {
    $question = $_REQUEST['question'];
    $keyw1 = $_REQUEST['keyw1'];
    $keyw2 = $_REQUEST['keyw2'];
    $keyw3 = $_REQUEST['keyw3'];
    $answer = $_REQUEST['answer'];
    $c_date = date("Y-m-d H:i:s");
    $uid = $_SESSION['uid'];
    $rating = $_REQUEST['rating'];
    $sql = "INSERT INTO data (question, keyw1, keyw2, keyw3, answer, c_date, uid, rating)
               VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
       echo "SQL error";
    } else {
      mysqli_stmt_bind_param($stmt, "ssssssss", $question, $keyw1, $keyw2, $keyw3, $answer, $c_date, $uid, $rating);
      mysqli_stmt_execute($stmt);
      $status = "</br>Dein Eintrag wurde erstellt. </br></br>";
      echo '<p class="echo_bold">' . $status . '</p>';
    }

} else {
    ?>
      </div>
      <table class="edit_table">
      <tr>
         <td class="menu_title">
            </br>
            Neue Fragen & Antworten erstellen 
         </td>
      </tr>
      <tr>
         <td>
            <form action="" method="post">
               <input type="hidden" name="new" value="1" />
               <br/>
               <input class="edit_input" type="text" name="question" placeholder="Frage eingeben" required /><br/>
               <br/>
               <input class="edit_input" type="text" name="keyw1" placeholder="Keyword 1 eingeben" required /><br/>
               <br/>
               <input class="edit_input" type="text" name="keyw2" placeholder="Keyword 2 eingeben" required /><br/>
               <br/>
               <input class="edit_input" type="text" name="keyw3" placeholder="Keyword 3 eingeben oder leer lassen" /><br/>
               <br/>
               <label style="font-weight: bold;">Relevanz (1-100)</label><br/>
               <input class="edit_input" type="text" name="rating" value="50" placeholder="Gib einen Wert für die Relevanz ein" required /><br/>
               </br>
               </br>
               <p style="font-size: 18px;"><textarea type="text" name="answer" id="ckeditor" placeholder="Gib hier Deine Antwort ein...">
               Gib hier Deine Antwort ein...</textarea></p>
               <br/>
               <br/>
               <input name="submit" type="submit" value="Speichern" />
            </form>
            <div style="height: 30px;"></div>
            <?php
}?>
                  </td>
               </tr> 
            </table>
            <script>
               ClassicEditor
                       .create( document.querySelector( '#ckeditor' ), {
                           ckfinder: {
                               uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
                           },
                           toolbar: [ 'ckfinder', 'imageUpload', '|', 'link', '|', 'bold',  '|', 'underline', '|','undo' ]
                       } )
                       .catch( function( error ) {
                           console.error( error );
                       } );
            </script>
   </table>
</body>
</html>
