@extends('layouts.app')

@section('content')
    <h1>INSERT A HOUSE</h1>
    <form method="POST" action="{{ route('houses.store') }}">
        @csrf
        <div>
            <label for="dimensione">dimensione</label>
            <input type="number" name="dimensione" value="{{ old('dimensione', '') }}" />
            @error('dimensione')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="descrizione">descrizione</label>
            <input type="text" name="descrizione" value="{{ old('descrizione', '') }}" />
            @error('descrizione')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="prezzo">prezzo</label>
            <input type="number" name="prezzo" value="{{ old('prezzo', '') }}" />
            @error('prezzo')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="classe_energetica">classe_energetica</label>
            <input type="text" name="classe_energetica" value="{{ old('classe_energetica', '') }}" />
            @error('classe_energetica')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="indirizzo">indirizzo</label>
            <input type="text" name="indirizzo" value="{{ old('indirizzo', '') }}" />
            @error('indirizzo')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="piani">piani</label>
            <input type="number" name="piani" value="{{ old('piani', '') }}" />
            @error('piani')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="proprietario">proprietario</label>
            <input type="text" name="proprietario" value="{{ old('proprietario', '') }}" />
            @error('proprietario')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="numero_di_stanze">numero_di_stanze</label>
            <input type="number" name="numero_di_stanze" value="{{ old('numero_di_stanze', '') }}" />
            @error('numero_di_stanze')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="data_di_costruzione">data_di_costruzione</label>
            <input type="date" name="data_di_costruzione" value="{{ old('data_di_costruzione', '') }}" />
            @error('data_di_costruzione')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="garage">garage</label>
            <input type="checkbox" name="garage" value="{{ old('garage', '') }}" />
            @error('garage')
                {{ $message }}
            @enderror
        </div>

        <input type="submit" value="SALVA">
    </form>
@endsection
