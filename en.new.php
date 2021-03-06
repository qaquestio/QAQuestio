<?php
include 'auth.php';
include 'en.head.php';
?>

<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<title>QAQuestio | Create</title>
</head>
<body>

<nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="en.start.php">Home</a>
            <a href="en.help.php" target="_blank" title="Help" id="nodecoration_black">( i )</a>
            <a href="en.view.php">View</a>
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
    $fav = $_REQUEST['fav'];
    $sql = "INSERT INTO data (question, keyw1, keyw2, keyw3, answer, c_date, uid, rating, fav)
               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
       echo "SQL error";
    } else {
      mysqli_stmt_bind_param($stmt, "sssssssss", $question, $keyw1, $keyw2, $keyw3, $answer, $c_date, $uid, $rating, $fav);
      mysqli_stmt_execute($stmt);
      $status = "</br>Record created successfully. </br></br>";
      echo '<p class="echo_bold">' . $status . '</p>';
    }

} else {
    ?>
      </div>
      <table class="edit_table">
      <tr>
         <td class="menu_title">
            </br>
            Create new records 
         </td>
      </tr>
      <tr>
      <tr>
         <td>
            <form action="" method="post">
               <input type="hidden" name="new" value="1" />
               <br/>
               <input class="edit_input" type="text" name="question" placeholder="Enter Question" required /><br/>
               <br/>
               <input class="edit_input" type="text" name="keyw1" placeholder="Enter Keyword 1" required /><br/>
               <br/>
               <input class="edit_input" type="text" name="keyw2" placeholder="Enter Keyword 2" required /><br/>
               <br/>
               <input class="edit_input" type="text" name="keyw3" placeholder="Enter Keyword 3 or leave blank" /><br/>
               <br/>
               <label style="font-weight: bold;">Rating (1-100)</label><br/>
               <input class="edit_input" type="text" name="rating" value="50" placeholder="Enter your rating" required /><br/>
               <br/>
               <label style="font-weight: bold;">Favourite</label><br/>
               <select name="fav" id="fav">
                  <option value = "0">No</option>
                  <option value = "1">Yes</option>
               </select>
               </br>
               </br>
               <p style="font-size: 18px;"><textarea type="text" name="answer" id="ckeditor" placeholder="Put your answer here...">
               Put your answer here.</textarea></p>
               <br/>
               <br/>
               <input name="submit" type="submit" value="Save" />
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
