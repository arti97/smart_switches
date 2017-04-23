<link rel="stylesheet" type="text/css" href="style.css" />
<div class="container">
    <h2>Create a New Account</h2>
    
    <div class="regisFrm">
        <form action="login.php" method="post">
            <input type="text" name="first_name" placeholder="FIRST NAME" required="">
            <input type="text" name="last_name" placeholder="LAST NAME" required="">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <input type="text" name="phone" placeholder="PHONE NUMBER" required="">
            <input type="password" name="password" placeholder="PASSWORD" required="">
            <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
            </div>
        </form>
    </div>
</div>