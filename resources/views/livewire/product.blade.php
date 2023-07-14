<div>
    <p>
        Title: <input type="text" wire:model="title"> <br><br>
        Name: <input type="text" wire:model="name"> <br><br>

    </p>

    <p>
        <h3>Title: {{ $title }}</h3>

        <h5>Name: {{ $name }}</h5>
    </p>

    <h1>Lifecycle Hooks Methods</h1>

    <ol>
        @foreach ($infos as $item)
            <li><h5>{{ $item }}</h5></li>
        @endforeach
    </ol>

</div>
