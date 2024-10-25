<div>
    <div class="submit-property-area">
        <div class="container-fluid">
            <form class="submit-property-form product-upload" wire:submit.prevent="publish">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Title</label>
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
                                    <label>Description</label>
                                    <textarea name="content" class="form-control" cols="30" rows="5"
                                              wire:model="description" id="editor"></textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-12" wire:ignore>
                                <div class="form-group">
                                    <label>Requirements</label>
                                    <textarea name="content" class="form-control editor-description" cols="30" rows="5"
                                              wire:model="requirement" id="requirement-editor"></textarea>
                                    @error('requirement') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12" wire:ignore>
                                <div class="form-group">
                                    <label>Responsibilities</label>
                                    <textarea name="content" class="form-control editor-features" cols="30" rows="5"
                                              wire:model="responsibilities" id="responsibility-editor"></textarea>
                                    @error('responsibilities') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" class="form-control" wire:model="location"/>
                                    @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Employment Type</label>
                                    <input type="text" class="form-control" wire:model="employmentType"/>
                                    @error('employmentType') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Experience Level</label>
                                    <input type="text" class="form-control" wire:model="experienceLevel"/>
                                    @error('experienceLevel') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Department</label>
                                    <input type="text" class="form-control" wire:model="department"/>
                                    @error('department') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Salary Range</label>
                                    <input type="text" class="form-control" wire:model="salaryRange"/>
                                    @error('salaryRange') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 d-flex justify-content-center align-items-center">

                        <button type="submit" class="default-btn me-3">
                            <span>
                                 Submit
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
        selector: '#requirement-editor',
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
                @this.set('requirement', editor.getContent());
            });
        }
    });

    // Initialize TinyMCE for the Features field
    tinymce.init({
        selector: '#responsibility-editor',
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
                @this.set('responsibilities', editor.getContent());
            });
        }
    });

</script>

@endscript
