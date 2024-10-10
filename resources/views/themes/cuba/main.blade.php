<x-layout title="Cuba">
    <x-navigation />
    <form action="{{ route('change.theme') }}" method="POST">
        @csrf
        <label for="theme">Выберите тему:</label>
        <select name="theme" id="theme">
            <option value="classic" {{ session('theme') == 'classic' ? 'selected' : '' }}>Classic</option>
            <option value="cuba" {{ session('theme') == 'cuba' ? 'selected' : '' }}>Cuba</option>
        </select>
        <x-button type="submit" text="Сохранить" class="cuba-button"/>
    </form>
</x-layout>
