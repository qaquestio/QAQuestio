<?php
@ob_start();
session_start();
include 'en.head.php';?>

<title>Create new password</title>
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

        <?php

$selector = $_GET["selector"];
$validator = $_GET["validator"];

if (empty($selector) || empty($validator)) {
    echo "Could not validate your request.";
} else {
    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
        ?>

        <form action="reset-password-inc.php" method="post">
          <input type="hidden" name="selector" value="<?php echo $selector; ?>" />
          <input type="hidden" name="validator" value="<?php echo $validator; ?>" />
          <input class="login_input" type="password" name="pwd" placeholder="Enter a new password..." /></br></br>
          <input class="login_input" type="password" name="pwd-repeat" placeholder="Repeat new password..." /></br></br>
          <input type="submit" name="reset-password-submit" value="Reset password" />
        </form>
      </td>
    </tr>
  </table>
  <?php
}
}
?>

</body>

</html>
