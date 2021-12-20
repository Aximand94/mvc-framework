
<div class="container mt-5">
    <div class="container">
        <form method="POST" action="<?=SITE?>user/registration">
            <div class="mb-3 text-center">
                <h3>Registration form</h3>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Login:</label>
                <input type="text" name="login" class="form-control" id="login">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" id="password" class="form-control" aria-describedby="passwordHelp">
                <div id="passwordHelp" class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters.
                </div>
            </div>
            <div class="mb-3">
                <label for="inputPassword5" class="form-label">Confirm password:</label>
                <input type="password" name="confirmPassword" id="inputPassword5" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address:</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="nsmr" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <input type="reset" class="btn btn-secondary">
                <input type="submit" class="btn btn-primary" name="registration" value="Registration">
            </div>
        </form>
    </div>
</div>

