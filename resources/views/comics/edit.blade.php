<form action="{{ route('comics.update', $comic->id) }}" method="post">
    @method('PUT'/'PATCH')
    @CSRF
    <div class="form-row">
        <label for="title">Titolo</label>
        <input type="text" name="title">
    </div>
    <div class="form-row">
        <label for="description">Descrizione</label>
        <input type="text" name="description">
    </div>
    <div class="form-row">
        <label for="thumb">Immagine</label>
        <input type="text" name="thumb">
    </div>
    <div class="form-row">
        <label for="price">Prezzo</label>
        <input type="text" name="price">
    </div>
    <div class="form-row">
        <label for="series">Serie</label>
        <input type="text" name="series">
    </div>
    <div class="form-row">
        <label for="sale_date">Data Vendita</label>
        <input type="text" name="sale_date">
    </div>
    <div class="form-row">
        <label for="type">Tipo</label>
        <input type="text" name="type">
    </div>

    <input type="submit" value="Invia">
</form>