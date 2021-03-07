<?php include ('en.head.php'); ?>

</head>
<body>
   <nav class="navbar">
      <div class="topnav">
         <div class="topnav-right">
            <a href="index.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="en.privacy.php" target="_blank">Privacy</a>
         </div>
      </div>
   </nav>
   <div style="height: 100px;"></div>
   <?php include('process_reg.php') ?>

   <table class="edit_table">
   <tr>
         <td>
            <h1>QAQuestio</h1>
         </td>
      </tr>
      <tr>
         <td class="menu_title">
            </br>
            <p>Register</p>
            </br>
         </td>
      </tr>
      <tr>
         <td style="align: center;">
            <form method="post" action="register.php">
                  <input class="login_input" type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" required/>
				      </br></br>
                  <?php if (isset($name_error)): ?>
                  <span style="color:red;"><?php echo $name_error; ?></span>
                  </br></br>
                  <?php endif ?>
                  <input class="login_input" type="email" name="email" placeholder="E-Mail (for password recovery only)" value="<?php echo $email; ?>" required/>
				      </br></br>
                  <?php if (isset($email_error)): ?>
                  <span style="color:red;"><?php echo $email_error; ?></span>
                  </br></br>
                  <?php endif ?>
                  <input class="login_input" type="password" name="password" placeholder="Password (10-20 characters. [a-z], [A-Z], [0-9] and [%,$,&,...])" required/>
				      </br></br>
                  <?php if (isset($pwd_error)): ?>
                  <span style="color:red;"><?php echo $pwd_error; ?></span>
                  </br></br>
                  <?php endif ?>
                  <input type="checkbox"  name="terms" required />
                  I agree to <a href="en.qaquest.php#about" target="_blank">qaquest.io terms</a>.
				      </br></br>
                  <input name="register" type="submit" value="Register"/>
            </form>
         </td>
      </tr>
   </table>
</body>
</html>