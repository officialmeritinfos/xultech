<div>
    <!-- Modal -->
    <div class="modal fade" id="setTwoFactor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Setup Two-factor Authentication</h5>
                </div>
                <div class="modal-body">
                    @if(!$showCodeForm)
                        <form class="row g-3 justify-content-center">
                            <div class="col-md-12 text-center">
                                <!-- Instruction about setting up Two-Factor Authentication -->
                                <div class="mb-4">
                                    <p class="text-muted">
                                        Scan the QR code below with your authenticator app (like Google Authenticator or Authy).
                                        After scanning, enter the secret code below in your app to link it to your account.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <!-- Centering the QR code image -->
                                <div class="mb-4">
                                    <div class="d-flex justify-content-center">
                                        {!! $QR_Image !!} <!-- QR Code Image -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <!-- Input for displaying the secret code -->
                                <div class="mb-4">
                                    <label for="secretCode" class="form-label">Your Secret Code</label>
                                    <div class="input-group mb-3">
                                        <input type="text" id="secretCode" class="form-control" value="{{ $secretCode }}" readonly>
                                        <button class="btn btn-outline-secondary cpy" type="button" id="button-addon2"
                                                data-clipboard-target="#secretCode">
                                            <i class="ri-file-copy-2-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <!-- Button to proceed to the next form -->
                                <button type="button" class="btn btn-primary default-btn" wire:click="showForm">
                                    Next
                                </button>
                            </div>
                        </form>

                    @endif

                    @if($showCodeForm)
                        <form class="row g-3" method="post" wire:submit.prevent="submitTwoFactor()">
                            <div class="col-md-12"></div>
                            <div class="col-md-12">
                                <label for="inputCode" class="form-label">Code</label>
                                <input type="number" class="form-control" id="inputCode" minlength="6" maxlength="6" wire:model.defer="code">
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="default-btn">
                                    <span>
                                        Proceed
                                         <i class="fa fa-arrow-right" wire:loading.remove></i>
                                         <div wire:loading>
                                             <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
                                         </div>
                                     </span>
                                </button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:init', function () {
            // Show modal on page load
            $('#setTwoFactor').modal('show');
            // Keep modal open after every Livewire update
            Livewire.hook('message.processed', (message, component) => {
                if (component.fingerprint.name === 'admin.components.set-two-factor') {
                    $('#setTwoFactor').modal('show');
                }
            });

            Livewire.on('twoFactorSuccessful', (event) => {
                let url = event.url;
                console.log(url)
                // Delay the redirect by 5 seconds (5000 milliseconds)
                setTimeout(() => {
                    window.location.href = url;
                }, 5000);
            });
        });
    </script>
</div>
