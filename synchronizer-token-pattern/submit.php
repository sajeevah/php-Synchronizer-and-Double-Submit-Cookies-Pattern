<?php 
    include_once("header.php");
?>

<script>
	$(function() {
		$.ajax({
			type: 'POST',
			url: 'get_csrf_token.php',
			success: function(result) {
				const res = JSON.parse(result);
				console.log(res.token);
				document.getElementById('hiddenToken').value = res.token;
			}
		});
	});
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