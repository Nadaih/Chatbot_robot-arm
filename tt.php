<!DOCTYPE html>
<html>
            <head>
            <style>
                #joa {
                }
                .button {
                  background-color: #4CAF50;
                  border: none;
                  color: white;
                  padding: 15px 32px;
                  text-align: left;
                  text-decoration: none;
                  display: inline-block;
                  font-size: 16px;
                  margin: 4px 2px;
                  cursor: pointer;
                }
            </style>
            </head>
                <body>
<form action="tt.php" method="post">
                    <p>engine1 </p>
                    <input type="range"   min="0" max="30" name="1">
                    <p>engine2 </p>
                    <input type="range"   min="0" max="30" name="2">
                    <p>engine3</p>
                    <input type="range"  min="0" max="30" name="3">
                    <p>engine4</p>
                    <input type="range"   min="0" max="30" name="4">
                    <p>engine5</p>
                    <input type="range"   min="0" max="30" name="5">
                    <p>engine6</p>
                    <input type="range"   min="0" max="30"  name="6">

                    <button name="run">run</button>
                    <button name="save">save</button>
</form>
       
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db ="robot arm";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
 

if (isset($_POST['save'])) {

$sql = "INSERT INTO `engine` (`engine1`, `engine2`, `engine3`, `engine4`, `engine5`, `engine6`) VALUES ('".$_POST['1']."','".$_POST['2']."','".$_POST['3']."','".$_POST['4']."','".$_POST['5']."','".$_POST['6']."')"; 
$result = $conn->query($sql);
 }

 ?>

<script>
  window.watsonAssistantChatOptions = {
      integrationID: "eb82bc77-0185-4f69-8170-57d467ce155b", // The ID of this integration.
      region: "us-south", // The region your integration is hosted in.
      serviceInstanceID: "a3969785-8c39-455b-aa66-cf214980b0db", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>


</body>
</html>