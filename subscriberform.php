<?php


if($_POST["A new message recieved!"]) {


mail("jerushapaulraj@gmail.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>