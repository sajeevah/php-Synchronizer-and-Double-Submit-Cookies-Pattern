<?php 

if(isset($_POST['name'], $_POST['hiddenToken'])){

    $address   = $_POST['name'];
    $valid = false;

    $hiddenToken   = $_POST['hiddenToken'];

    if(isset($_COOKIE['tokenID'])){
        $tokenCookie = $_COOKIE['tokenID'];
        if($tokenCookie == $hiddenToken){
            $valid = true;
        }
    }

}


include_once("header.php");

?>


	<div class="container">
		<div class="row">

			<?php 
                if($valid){
                    echo '<h2 style="color:green;">Token Matched! Update Success! </h2>';
                }else {
                    echo '<h2 style="color:red;">Token Error! Update Fail! </h2>';
                }
            ?>

		</div>
	</div>

<?php

include_once("footer.php");

?>