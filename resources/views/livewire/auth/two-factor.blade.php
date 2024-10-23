<div>
    <div class="user-form-content">
        <h3>Two-factor Authentication</h3>
        <p>Enter the code from your authentication app.</p>

        <form class="user-form" wire:submit.prevent="processTwoFactor()">
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
            Livewire.on('loginVerified', (event) => {
                let url = event.url;
                // Delay the redirect by 5 seconds (5000 milliseconds)
                setTimeout(() => {
                    window.location.href = url;
                }, 5000);
            });
        });
    </script>
</div>
