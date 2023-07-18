<div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        @if(session('message'))
            <p class="alert alert-success">{{ session('message') }}</p>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Multi Image Upload</h3>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="uploadImage" id="upload-images" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="images">File</label>
                        <input type="file" name="images" class="form-control" wire:model="images" multiple>
                        @error('images')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
