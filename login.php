<?php
@ob_start();
session_start();
include 'en.head.php';?>

<title>Login</title>
</head>
<body>
    <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="index.php">[  Home  ]&nbsp;&nbsp;&nbsp;&nbsp;</a>
         </div>
      </div>
   </nav>
   <div style="height: 100px;"></div>
   <div style="text-align: center; font-size: 1.2rem;">
   <?php
require 'conn/conn.php';

if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM users WHERE username='$username'
      and password='" . md5($password) . "'";
    $result = mysqli_query($conn, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION["timestamp"] = time();
        $_SESSION['username'] = $username;
        $_SESSION['uid'] = $conn->query("SELECT uid FROM users WHERE username = '$username'")->fetch_object()->uid;
        
        if (isset($_SESSION["username"])) {
         if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
             $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
     
             if ($lc == "pt") {
                 header("location: https://qaquest.io/pt.start.php");
                 exit();
     
             } else if ($lc == "de") {
                 header("location: https://qaquest.io/de.start.php");
                 exit();
             } else {
                 header("location: https://qaquest.io/en.start.php");
                 exit();
             }
         }
     } else {
     
         header("location: https://qaquest.io");
         exit();
     }
    } else {
        sleep(3);
        echo 'Username/password is incorrect.';
        echo '</br>';
        echo "<a href='login.php'>Login</a>";
    }
} else {
    ?>
    </div>
   <table class="edit_table">

      <tr>
         <td style="align: center;">
           <h1>QAQuestio</h1>
         </td>
      </tr>

      <tr>
         <td class="menu_title">
         </br>
           <p>Login</p>
           </br>
         </td>
      </tr>

      <tr>
         <td style="align: center;">
            <form action="" method="post" name="login">
               <input class="login_input" type="text" name="username" placeholder="Username" required /><br/>
               <br/>
               <input class="login_input" type="password" name="password" placeholder="Password" required /><br/>
               <br/>
               <input name="submit" type="submit" value="Login"/>
            </form>
            <p style="font-size: 1.1em;"><br/><a href='register.php'>Register</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='reset-password.php'>Reset password</a></p>
            <?php
if (isset($_GET["newpwd"])) {
        if ($_GET["newpwd"] == "empty") {
            echo '</br>';
            echo '<p class="signupsuccess">Reset your password</p>';
        }
        if ($_GET["newpwd"] == "pwdnotsame") {
            echo '</br>';
            echo '<p class="signupsuccess">Passwords are not the same</p>';
        }
        if ($_GET["newpwd"] == "passwordupdated") {
            echo '</br>';
            echo '<p class="signupsuccess">Password was updated!</p>';
        }
    }
    ?>
         </td>
      </tr>
   </table>
   <?php }?>
</body>
</html>
