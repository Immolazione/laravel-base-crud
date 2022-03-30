    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-row">
            <label for="title">Titolo</label>
            <input type="text" name="title" value="{{ old('title', $comic->title ?? '') }}">
            @error('title')
            {{ $message }}
            @enderror
        </div>
        <div class="form-row">
            <label for="description">Descrizione</label>
            <input type="text" name="description" value="{{ old('description', $comic->description ?? '') }}">
            @error('title')
            {{ $message }}
            @enderror
        </div>
        <div class="form-row">
            <label for="thumb">Immagine</label>
            <input type="text" name="thumb" value="{{ old('thumb', $comic->thumb ?? '') }}">
            @error('title')
            {{ $message }}
            @enderror
        </div>
        <div class="form-row">
            <label for="price">Prezzo</label>
            <input type="text" name="price" value="{{ old('price', $comic->price ?? '') }}">
            @error('title')
            {{ $message }}
            @enderror
        </div>
        <div class="form-row">
            <label for="series">Serie</label>
            <input type="text" name="series" value="{{ old('series', $comic->series ?? '') }}">
            @error('title')
            {{ $message }}
            @enderror
        </div>
        <div class="form-row">
            <label for="sale_date">Data Vendita</label>
            <input type="text" name="sale_date" value="{{ old('sale_date', $comic->sale_date ?? '') }}">
            @error('title')
            {{ $message }}
            @enderror
        </div>
        <div class="form-row">
            <label for="type">Tipo</label>
            <input type="text" name="type" value="{{ old('type', $comic->type ?? '') }}">
            @error('title')
            {{ $message }}
            @enderror
        </div>
    
        <input type="submit" value="Invia">
    </form>
