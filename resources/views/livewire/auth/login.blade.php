<div>
    <div class="user-form-content">
        <h3>Log in</h3>
        <p>Sign in to continue to Dashli.</p>

        <form class="user-form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter your email">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Enter your password">
                    </div>
                </div>

                <div class="col-12">
                    <div class="login-action">
									<span class="log-rem">
										<input id="remember-2" type="checkbox">
										<label>Keep me logged in</label>
									</span>

                        <span class="forgot-login">
										<a href="{{route('forgotten-password')}}">Forgot your password?</a>
									</span>
                    </div>
                </div>

                <div class="col-12">
                    <button class="default-btn" type="submit">
                        Sign in
                    </button>
                </div>

                <div class="col-12">
                    <span class="or">Or</span>
                </div>

                <div class="col-12">
                    <a href="https://www.google.com/" target="_blank" class="or-login google">
                        <i class="ri-google-fill"></i>
                        Login with google
                    </a>
                </div>

                <div class="col-12">
                    <p class="create">Don’t have an account? <a href="{{route('register')}}">create</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
