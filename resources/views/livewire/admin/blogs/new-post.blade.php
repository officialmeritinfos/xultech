<div>
    <div class="submit-property-area">
        <div class="container-fluid">
            <form class="submit-property-form product-upload" wire:submit.prevent="publish">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Post Title</label>
                                    <input type="text" class="form-control" wire:model.live="title">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" class="form-control" wire:model="slug" readonly>
                                </div>
                            </div>

                            <div class="col-lg-12" wire:ignore>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="content" class="form-control editor" cols="30" rows="5"
                                    wire:model="content" id="editor"></textarea>
                                    @error('content') <span class="text-danger">{{ $message }}</span> @enderror
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
                                    <label>Tags</label>
                                    <input type="text" class="form-control" wire:model="tags"/>
                                    @error('tags') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Product Images</label>
                            <div class="file-upload">
                                <input type="file" name="file" id="file" class="inputfile"
                                wire:model="featuredImage">
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
                                 Publish
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
    tinymce.init({
        selector: '.editor',
        forced_root_block: false,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste","image","code","codesample"
        ],
        toolbar:
            "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist " +
            "outdent indent | link image|code|codesample|advlist |autolink |lists |link |image |charmap| print |preview |anchor",

        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
                @this.set('content', editor.getContent());
            });
        },
        license_key: 'gpl'
    });

</script>

@endscript
