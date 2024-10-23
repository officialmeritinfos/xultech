<div>

    @if($showRegisterForm && !$showEmailVerificationForm)
        <div class="user-form-content">
            <h3>Register</h3>
            <p>Register in to continue to comment, and manage your projects with {{$siteName}}.</p>

            <form class="user-form" wire:submit.prevent="submitRegistration()">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter your name"
                                   wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" name="username" placeholder="Enter a username"
                                   wire:model="username">
                            @error('username') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Enter your email"
                                   wire:model="email">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Enter your password"
                                   wire:model="password">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Repeat password</label>
                            <input class="form-control" type="password" name="repeat-password" placeholder="Enter your repeat password"
                                   wire:model="password_confirmation">
                            @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-12 mb-5">
                        <div id="captcha" class="mt-4" wire:ignore></div>
                        @error('captcha')
                        <p class="mt-3 text-sm text-red-600 text-left">
                            <span class="text-danger"> {{ $message }}</span>
                        </p>
                        @enderror
                    </div>

                    <div class="col-12">
                        <button class="default-btn register" type="submit">
                        <span>
                             Sign up
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
                        <p class="create">Already have an account? <a href="{{route('login')}}">Sign in</a></p>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://www.google.com/recaptcha/api.js?onload=handle&render=explicit"
                async
                defer>
        </script>

        <script>
            var  handle = function(e) {
                widget = grecaptcha.render('captcha', {
                    'sitekey': '{{ config('app.recaptcha_key') }}',
                    'theme': 'light', // you could switch between dark and light mode.
                    'callback': verify
                });

            }
            var verify = function (response) {
                @this.set('captcha', response)
            }
        </script>
    @endif
    @if($showEmailVerificationForm && !$showRegisterForm)
        <livewire:auth.email-verification/>
    @endif

</div>
