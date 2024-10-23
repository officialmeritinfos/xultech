<div>
    @if(!$showEmailVerificationForm && !$showTwoFactorForm)
        <div class="user-form-content">
            <h3>Log in</h3>
            <p>Sign in to continue to {{$siteName}}.</p>

            <form class="user-form" method="post" wire:submit.prevent="submit()">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Email/Username</label>
                            <input class="form-control" type="text" name="name" placeholder="Email/Username"
                                   wire:model.blur="login">
                            @error('login') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Enter your password"
                                   wire:model.blur="password">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="login-action">
									<span class="log-rem">
										<input id="remember-2" type="checkbox" wire:model="remember">
										<label>Keep me logged in</label>
									</span>

                            <span class="forgot-login">
										<a href="{{route('forgotten-password')}}">Forgot your password?</a>
									</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="default-btn" type="submit">
                            <span>
                                 Sign in
                                 <i class="fa fa-arrow-right" wire:loading.remove></i>
                                 <div wire:loading>
                                     <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
                                 </div>
                             </span>
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
                        <p class="create">Don’t have an account? <a href="{{route('register')}}">Create</a></p>
                    </div>
                </div>
            </form>
        </div>
        <script>
            document.addEventListener('livewire:init', () => {
                Livewire.on('loginSuccessful', (event) => {
                    let url = event.url;
                    console.log(url)
                    // Delay the redirect by 5 seconds (5000 milliseconds)
                    setTimeout(() => {
                        window.location.href = url;
                    }, 5000);
                });
            });
        </script>
    @endif
    @if($showTwoFactorForm)
        <livewire:auth.two-factor/>
    @endif
    @if($showEmailVerificationForm)
        <livewire:auth.email-verification/>
    @endif
</div>
