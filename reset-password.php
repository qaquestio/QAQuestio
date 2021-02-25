<?php
@ob_start();
session_start();
include 'head.php';
?>

<title>Reset password</title>
</head>

<body>

  <nav class="navbar">
    <div class="topnav">
      <div class="topnav-right">
        <a href="index.php">Home</a>
      </div>
    </div>
  </nav>
  <div style="height: 100px;"></div>
  <table class="edit_table">
    <tr>
      <td style="align: center;">
        <h3>Reset password</h3>
        </br>
        <form action="reset-request.php" method="post">
          <input class="login_input" type="text" name="email" placeholder="Enter your E-Mail address..."></br></br>
          <input type="submit" name="reset-requets-submit" value="Send reset token" />
        </form>
        <div style="text-align: left; font-size: 1.2rem;">
          <?php
if (isset($_GET["reset"])) {
    if ($_GET["reset"] == "success") {
        echo '</br>';
        echo '<p class="signupsuccess">Check your e-mail!</p>';
    }
}
?>
        </div>
      </td>
    </tr>
  </table>
</body>

</html>