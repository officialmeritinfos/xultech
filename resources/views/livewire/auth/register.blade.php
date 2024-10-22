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
    @endif
    @if($showEmailVerificationForm && !$showRegisterForm)
            <div class="user-form-content">
                <h3>Verify your account</h3>
                <p>Enter the code sent to your mail here.</p>

                <form class="user-form" wire:submit.prevent="verifyEmail()">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Code</label>
                                <input class="form-control" type="number" name="name" placeholder="Enter your code"
                                       wire:model="code" minlength="6" maxlength="6">
                                @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn register" type="submit">
                                <span>
                                     Verify Account
                                    <i class="fa fa-arrow-right" wire:loading.remove></i>
                                    <div wire:loading>
                                        <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
                                    </div>
                                </span>
                            </button>
                        </div>
                        <div wire:ignore class="text-center">
                            <!-- Countdown text -->
                            <p id="countdown-text" style="display: none;">
                                Please wait <span id="countdown"></span> seconds before requesting again.
                            </p>
                            <!-- Button to resend the verification email -->
                            <button id="resend-btn" class="btn btn-primary btn-sm" wire:click="resend">
                                Resend Verification Email
                            </button>
                        </div>
                    </div>
                </form>
            </div>
    @endif

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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let resendButton = document.getElementById('resend-btn');
            let countdownText = document.getElementById('countdown-text');
            let countdownDisplay = document.getElementById('countdown');

            // Retrieve stored countdown value from localStorage
            let countdown = localStorage.getItem('countdown') ? parseInt(localStorage.getItem('countdown')) : 0;

            // Check if a countdown is in progress and start it if necessary
            if (countdown > 0) {
                startCountdown(countdown);
            }

            // Add event listener to the resend button
            resendButton.addEventListener('click', function () {
                // Set countdown to 60 seconds on click and store it in localStorage
                countdown = 60;
                localStorage.setItem('countdown', countdown);
                startCountdown(countdown);

                // Call a function here to resend the verification email via Livewire or another backend mechanism
                Livewire.dispatch('resend')
                console.log('Resend verification email triggered.');
            });

            function startCountdown(seconds) {
                // Hide the resend button and show the countdown text
                resendButton.style.display = 'none';
                countdownText.style.display = 'block';

                // Start the countdown interval
                const interval = setInterval(() => {
                    seconds--;
                    countdownDisplay.textContent = seconds;
                    localStorage.setItem('countdown', seconds);  // Store the current countdown value in localStorage

                    // If the countdown reaches zero, stop the countdown and reset the UI
                    if (seconds <= 0) {
                        clearInterval(interval);
                        localStorage.removeItem('countdown');  // Remove countdown from localStorage
                        resendButton.style.display = 'block';  // Show the resend button
                        countdownText.style.display = 'none';  // Hide the countdown text
                    }
                }, 1000);  // Countdown every 1 second
            }
        });

    </script>
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('emailVerified', (event) => {
                let url = event.url;
                // Delay the redirect by 5 seconds (5000 milliseconds)
                setTimeout(() => {
                    window.location.href = url;
                }, 5000);
            });
        });
    </script>

</div>
