<div>
    <div class="submit-property-area">
        <div class="container-fluid">
            <form class="submit-property-form product-upload" wire:submit.prevent="addProduct()">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" wire:model.live="name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Logo</label>
                                    <input type="file" class="form-control" wire:model.live="icon">
                                    @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12" wire:ignore>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="content" class="form-control editor-description" cols="30" rows="5" wire:model="description" id="description-editor"></textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12" wire:ignore>
                                <div class="form-group">
                                    <label>Features</label>
                                    <textarea name="content" class="form-control editor-features" cols="30" rows="5" wire:model="features" id="features-editor"></textarea>
                                    @error('features') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" class="form-control" wire:model.live="website">
                                    @error('website') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>License Type</label>
                                    <input type="text" class="form-control" wire:model.live="licenseType">
                                    @error('licenseType') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" class="form-control" wire:model="category"/>
                                    @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Versions</label>
                                    <input type="text" class="form-control" wire:model="versions"/>
                                    @error('versions') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Product Images</label>
                            <div class="file-upload">
                                <input type="file" name="file" id="file" class="inputfile"
                                       wire:model="files" multiple>
                                <label class="upload" for="file">
                                    <i class="ri-image-2-fill"></i>
                                    Upload Photo
                                </label>
                            </div>
                        </div>
                        @error('featuredImage') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-lg-12 d-flex justify-content-center align-items-center">

                        <button type="submit" class="default-btn me-3">
                            <span>
                                 Add Product
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
    </div>
</div>
@script
<script>
    // Initialize TinyMCE for the Description field
    tinymce.init({
        selector: '#description-editor',
        forced_root_block: false,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste", "image", "code", "codesample"
        ],
        toolbar:
            "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist " +
            "outdent indent | link image | code | codesample | advlist | autolink | lists | link | image | charmap | print | preview | anchor",
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
                @this.set('description', editor.getContent());
            });
        }
    });

    // Initialize TinyMCE for the Features field
    tinymce.init({
        selector: '#features-editor',
        forced_root_block: false,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste", "image", "code", "codesample"
        ],
        toolbar:
            "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist " +
            "outdent indent | link image | code | codesample | advlist | autolink | lists | link | image | charmap | print | preview | anchor",
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
                @this.set('features', editor.getContent());
            });
        }
    });


</script>

@endscript
