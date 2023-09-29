<div>
    @switch(request()->get('type'))
        @case('create')
                <div class="alert alert-success"> Sikeresen létrehozva a felhasználó!</div>
            @break
        @case('update')
                <div class="alert alert-success"> Sikeresen frissítve a felhasználó!</div>
            @break
        @case('addEmail')
            <div class="alert alert-success"> Sikeresen hozzá lett adva egy email a felhasználóhoz!</div>
            @break
        @case('delete')
            <div class="alert alert-success"> Sikeresen törölve a felhasználó!</div>
            @break
        @case('upload')
            <div class="alert alert-success"> Sikeres fájl feltöltés!</div>
            @break
    @endswitch
</div>

<form action="/">
    <input type="submit" name="Kezdőoldal">
</form>
