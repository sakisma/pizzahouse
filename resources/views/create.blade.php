@extends ('layout')
@section ('content')

<div class="wrapper create-pizza">
    <h1>Create New Pizza</h1>
    <form action="/createpizza" method="POST">
    @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type</label>
        <select for="type" id="type" name="type">
            <option value="margarita">margarita</option>
            <option value="special">special</option>
            <option value="carbonara">carbonara</option>
            <option value="4cheese">4cheese</option>
        </select>
        <label for="sauce">Choose sauce</label>
        <select for="sauce" id="sauce" name="sauce">
            <option value="red">red</option>
            <option value="white">white</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label><br />
            <input type="checkbox" name="toppings[]" value="mushrooms">mushrooms<br />
            <input type="checkbox" name="toppings[]" value="onion">onion<br />
            <input type="checkbox" name="toppings[]" value="peppers">peppers<br />
            <input type="checkbox" name="toppings[]" value="bacon">bacon<br />
            <input type="checkbox" name="toppings[]" value="eggs">eggs<br />
            <input type="checkbox" name="toppings[]" value="olives">olives<br />
        </fieldset>
        <input type="submit" value="Place order">
    </form>
</div>

@endsection