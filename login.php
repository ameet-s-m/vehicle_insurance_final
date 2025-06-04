<?php include('templates/header.php'); ?>
<form action="actions/login_action.php" method="POST">
    <h2>Login</h2>
    <input type="text" name="email" placeholder="Email" required />
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit">Login</button>
</form>
<?php include('templates/footer.php'); ?>
