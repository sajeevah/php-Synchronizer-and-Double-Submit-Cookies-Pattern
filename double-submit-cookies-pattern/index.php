<?php 
    include_once("header.php");
?>

<div class="container">
  <div class="row" style="align-items: center;">
    <form action="process.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="username" class="form-control" id="username" name="username" required value="">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required value="">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<?php
    include_once("footer.php");
?>
