<div>
    <!-- debounce for use to control server ajax request -->
    Name: <br> <input type="text" wire:model.debounce.1000ms="name"> <br>

    Messages: <br>
    <textarea wire:model="message" cols="30" rows="10"></textarea><br>

    Marital Status: <br>
    Single <input type="radio" value="Single" wire:model="marital_status">
    Married <input type="radio" value="Married" wire:model="marital_status"><br>

    Favourite Color: <br>
    Red <input type="checkbox" value="Red" wire:model="colors">
    Green <input type="checkbox" value="Green" wire:model="colors">
    Blue <input type="checkbox" value="Blue" wire:model="colors"><br>

    Favourite Fruit:<br>
    <select wire:model="fruit">
        <option value="">Select Fruit</option>
        <option value="Apple">Apple</option>
        <option value="Banana">Banana</option>
        <option value="Mango">Mango</option>
        <option value="Tomato">Tomato</option>
    </select>

    <hr>
    <p>Your name is <b>{{ $name }}</b></p>

    <p>Messages : {{ $message }}</p>

    <p>Marital Status: {{ $marital_status }}</p>

    <p>
        Favourite Colors : 
        <ul>
            @foreach ($colors as $color)
                <li>{{ $color }}</li>
            @endforeach
        </ul>
    </p>

    <p>Favourite Fruit: {{ $fruit }}</p>
</div>
