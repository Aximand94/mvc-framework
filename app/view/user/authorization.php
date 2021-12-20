
<div class="container mt-5">
    <div class="container">
        <form method="POST" action="<?=SITE?>user/authorization">
            <h3>Sign in</h3>
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control" id="login">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember-my">
                <label class="form-check-label" name="rememberMy" for="remember-my">Remember me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
