<div>
    <div class="career-details_sidebar">
        <div class="form-box-style__form-wrapper bg-light-2">
            <h3 class="form-box-style-heading__title">Apply for this position</h3>
            <form class="form-box-style" method="post" wire:submit.prevent="processSubmission">
                <div class="form-box-style__form-inner">
                    <div class="form-box-style__form-input">
                        <h3 class="form-box-style-title">Your name</h3>
                        <input class="form-control bg-white" type="text" placeholder="Enter your full name"
                        wire:model="name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-box-style__form-input">
                        <h3 class="form-box-style-title">Email address</h3>
                        <input class="form-control bg-white" type="text" placeholder="Enter your email"
                        wire:model="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-box-style__form-input">
                        <h3 class="form-box-style-title">Contact Number</h3>
                        <input class="form-control bg-white" type="tel" placeholder="Enter your contact number"
                        wire:model="phone">
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-box-style__form-input">
                        <h3 class="form-box-style-title">Cover letter</h3>
                        <textarea class="form-control bg-white textarea" placeholder="Write us your cover letter here..."
                        wire:model="coverLetter"></textarea>
                        @error('coverLetter') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-box-style__form-input">
                        <h3 class="form-box-style-title">CV/Resume</h3>
                        <input class="form-control bg-white" type="file" wire:model="resume">
                        @error('resume') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div id="captcha" class="mt-4" wire:ignore></div>
                    @error('captcha')
                    <p class="mt-3 text-sm text-red-600 text-left">
                        <span class="text-danger"> {{ $message }}</span>
                    </p>
                    @enderror
                    <div class="form-box-style__condition-block">
                        <div id="item-list">
                            <span class="form-box-style__condition"><input type="checkbox" id="checkbox" >I agree to the {{config('app.name')}} privacy policy*</span>
                        </div>
                    </div>
                </div>
                <div class="form-box-style__form-input-button mt-4">
                    <button type="submit" class="btn-masco rounded-pill w-100">
                        <span>
                            Submit
                            <i class="ti-arrow-right" wire:loading.remove></i>
                            <div wire:loading>
                                <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
                            </div>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
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
