<div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        @if(session('message'))
            <p class="alert alert-success">{{ session('message') }}</p>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>File Upload</h3>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="fileUpload" id="form-upload" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" wire:model="title">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="filename">File</label>
                        <input type="file" name="filename" class="form-control" wire:model="filename">
                        @error('filename')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
