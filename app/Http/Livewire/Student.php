<?php

namespace App\Http\Livewire;

use App\Models\Student as Students;
use Livewire\Component;
use Livewire\WithPagination;

class Student extends Component
{
    public $student_id, $first_name, $last_name, $email, $phone;
    public $searchTerm;

    use WithPagination;

    public function resetInputField()
    {
        $this->resetErrorBag();

        $this->first_name = '';
        $this->last_name  = '';
        $this->email      = '';
        $this->phone      = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'phone'      => 'required',
        ]);

        Students::create($validatedData);

        $this->resetInputField();
        session()->flash('message', 'Student Created Successfully.');
        $this->emit('studentAdded');
    }

    public function edit($id)
    {
        $this->resetInputField();
        $this->resetErrorBag();

        $student = Students::find($id);

        $this->student_id = $student->id;
        $this->first_name = $student->first_name;
        $this->last_name  = $student->last_name;
        $this->email      = $student->email;
        $this->phone      = $student->phone;
    }

    public function update()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'phone'      => 'required',
        ]);

        if($this->student_id) {
            $student = Students::find($this->student_id);

            $student->update([
                'first_name' => $this->first_name,
                'last_name'  => $this->last_name,
                'email'      => $this->email,
                'phone'      => $this->phone,
            ]);
    
            session()->flash('message', 'Student updated.');
            $this->resetInputField();
            $this->emit('studentUpdated');
        }
    }

    public function delete($id)
    {
        if($id) {
            Students::find($id)->delete();

            session()->flash('message', 'Student deleted.');
        }
    }

    public function render()
    {
        $searchTerm = "%".$this->searchTerm."%";

        $students = Students::where('first_name', 'like', $searchTerm)
                    ->orWhere('last_name', 'like', $searchTerm)
                    ->orWhere('email', 'like', $searchTerm)
                    ->orWhere('phone', 'like', $searchTerm)
                    ->orderBy('id', 'desc')->paginate(5);

        return view('livewire.student', compact('students'));
    }

}
