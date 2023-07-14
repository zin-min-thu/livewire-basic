<div>


    <button type="button" wire:click="addTwoNumber(32, 44)">Sum</button>

    <br><br>

    <textarea wire:keydown.enter="displayMessage($event.target.value)" cols="30" rows="10" placeholder="key donw"></textarea>

    <textarea wire:keyup="displayMessage($event.target.value)" cols="30" rows="10" placeholder="key up"></textarea>

    <br><br>
    <form wire:submit.prevent="getSum">
        Number One: <input type="text" wire:model="num1">
        Number Two: <input type="text" wire:model="num2">

        <button type="submit">Submit</button>
    </form>

    <p>Sum: {{ $sum }}</p>

    <p>Message: {{ $message }}</p>
</div>
