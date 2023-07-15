<div>
    <style>
        nav svg{
            height: 20px;
        }
    </style>
    @if(isset($user))
    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <p>{{ $user->name }}</p>
            <p>{{ $user->email }}</p>
        </div>
    </div>
    @endif
    <div class="row justify-content center mt-3">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>All Users</h3>
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <button class="btn btn-info btn-sm" wire:click="edit({{ $user->id }})">Edit</button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>