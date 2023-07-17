<div>
    <style>
        nav svg{
            max-height: 20px;
        }
    </style>
    @include('livewire.create')
    @include('livewire.update')

    <div class="row justify-content center mt-3">
        <div class="col-md-8 offset-md-2">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>All Students
                                <button wire:click="resetInputField" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
                                    Add New Student
                                </button>
                            </h3>
                        </div>
                        <div class="col-md-4">
                            <input type="text" wire:model="searchTerm" class="form-control" placeholder="search ....">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" wire:click="edit({{ $student->id }})" data-toggle="modal" data-target="#updateStudentModal">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" wire:click="delete({{ $student->id }})">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
