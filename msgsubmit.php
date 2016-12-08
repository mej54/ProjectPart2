<html>
<head>
  <title>Submission</title>
  <link rel="stylesheet" href="./CSS/submitstyle.css">
</head>
<body>
  <div id="submission">
    Thank you for your submission.
  </div>

  <?php
  //connect to sql db
  $db = mysqli_connect("localhost","root","","mj_web_db");
  if ($db->connect_error):
    die ("Could not connect" . $db->connect_error);
  endif;

  $first = $_POST['firstname'];
  $last = $_POST['lastname'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];

  $query = "INSERT INTO visitor_info (first_name, last_name, email, message, date) VALUES ('$first', '$last', '$email', '$msg', NOW())";
  $result = mysqli_query($db,$query);

  if (!$result) {
    print "Error... the query could not be executed" . $db->error;
    exit();
  }
  ?>
</body>
</html> 