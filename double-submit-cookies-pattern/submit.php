<?php 
    include_once("header.php");
?>

<script>
	$(function() {
		const token = getCookie('tokenID');
		console.log(token);

		document.getElementById('hiddenToken').value = token;
	});



	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
</script>

	<div class="container">
		<div class="row">

			<form action="update.php" method="post">

				<div class="form-group">
					<input type="text" class="form-control" name="name" id="name" value="enter name">
				</div>

				<div class="form-group">
					<input type="hidden" class="form-control" id="hiddenToken" name="hiddenToken">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>

			</form>

		</div>
	</div>

<?php
    include_once("footer.php");
?>