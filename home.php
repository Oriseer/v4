<?php
session_start();
if (!$_SESSION['email']) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.png">

    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/Users.css">
    <link rel="stylesheet" href="https://npm-scalableminds.s3.eu-central-1.amazonaws.com/@scalableminds/chatroom@master/dist/Chatroom.css"/>
    <script>
      $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();
    </script>
</head>
  <body>
    <?php include'header.php'; ?>
    <br>
    <div class="chat-container"></div>
    <script
        src="https://npm-scalableminds.s3.eu-central-1.amazonaws.com/@scalableminds/chatroom@master/dist/Chatroom.js">
    </script>
    <script type="text/javascript">
        var chatroom = new window.Chatroom({
            host: "http://52.187.151.199:80",
            socketPath: "/socket.io/",
            title: "HENRY The AI-assistant",
            container: document.querySelector(".chat-container"),
            welcomeMessage: "HI I am Otech The Robot Assistant.\n Is there anything I can help you out?",
            speechRecognition: "en-US",
            voiceLang: "en-US"
        });
        chatroom.openChat();
    </script>

     <div>
    <form action="manualopen.php" method="GET">
      <button class="big-button" name="open">
      open
    </button>
    </form>
  </div>
  </body>
</html>
