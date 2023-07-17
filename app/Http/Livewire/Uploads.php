<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Upload;
use Livewire\WithFileUploads;

class Uploads extends Component
{
    public $title, $filename;

    use WithFileUploads;

    public function fileUpload()
    {
        $validated = $this->validate([
            'title'    => 'required',
            'filename' => 'required',
        ]);

        $filename = $this->filename->store('files', 'public');

        $validated['filename'] = $filename;

        Upload::create($validated);

        session()->flash('message', 'File uploaded.');

        $this->emit('fileUploaded');
    }

    public function render()
    {
        return view('livewire.uploads');
    }
}
