<h1>Sign Up</h1>
<?php Message::get() ?>
<form action="index.php" method="POST">
    <div class="form-group">
        <label for="login" class="form-label">Login:</label>
        <input type="text" name="login" id="login" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="emain" class="form-label">Email:</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group mt-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div>
        <button class="btn btn-primary mt-3" name="action" value="sendSignUp">Register</button>
    </div>

</form>

<?php
/* $lines = file('users.txt');
foreach ($lines as $line) {
    echo $line . "<br>";
} */

?>