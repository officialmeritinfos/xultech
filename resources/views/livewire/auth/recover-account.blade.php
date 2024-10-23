<div>
    @if(!$showPasswordResetForm && !$showVerificationForm)
        <div class="user-form-content">
            <h3>Recover Account</h3>

            <form class="user-form" wire:submit.prevent="submitPasswordRecovery()">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Username/Email</label>
                            <input class="form-control" type="text" name="login" placeholder="Enter your email/username"
                                   wire:model.blur="login">
                            @error('login') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="default-btn register" type="submit">
                         <span>
                             Proceed
                             <i class="fa fa-arrow-right" wire:loading.remove></i>
                             <div wire:loading>
                                 <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
                             </div>
                         </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <script>
            document.addEventListener('livewire:init', () => {
                Livewire.on('codeSent', (event) => {
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
    @if($showVerificationForm)
            <div class="user-form-content">
                <h3>Verify Password Reset</h3>

                <form class="user-form" wire:submit.prevent="verifyPaswwordResetToken()()">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Reset Token</label>
                                <input class="form-control" type="text" name="login" placeholder="Enter your token"
                                       wire:model="code" minlength="6" maxlength="6">
                                @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn register" type="submit">
                                 <span>
                                     Proceed
                                     <i class="fa fa-arrow-right" wire:loading.remove></i>
                                     <div wire:loading>
                                         <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
                                     </div>
                                 </span>
                            </button>
                        </div>
                    </div>
                </form>
                <div wire:ignore class="text-center">
                    <!-- Countdown text -->
                    <p id="countdown-text" style="display: none;">
                        Please wait <span id="countdown"></span> seconds before requesting again.
                    </p>
                    <!-- Button to resend the verification email -->
                    <button id="resend-btn" type="button" class="btn btn-primary btn-sm" wire:click="resend">
                        Resend Verification Email
                    </button>
                </div>
            </div>
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

    @endif
    @if($showPasswordResetForm)
            <div class="user-form-content">
                <h3>Reset Password</h3>

                <form class="user-form" wire:submit.prevent="changePassword()">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>New Password</label>
                                <input class="form-control" type="password" wire:model="password">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" wire:model="password_confirmation">
                                @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn register" type="submit">
                         <span>
                             Proceed
                             <i class="fa fa-arrow-right" wire:loading.remove></i>
                             <div wire:loading>
                                 <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
                             </div>
                         </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <script>
                document.addEventListener('livewire:init', () => {
                    Livewire.on('passwordChanged', (event) => {
                        let url = event.url;
                        // Delay the redirect by 5 seconds (5000 milliseconds)
                        setTimeout(() => {
                            window.location.href = url;
                        }, 5000);
                    });
                });
            </script>
    @endif
</div>
