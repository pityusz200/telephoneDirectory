<div>
    @switch(request()->get('type'))
        @case('not_found_user')
                <div class="alert alert-danger"> Nincs ilyen felhasználó!</div>
            @break
        @case('found_user-fail')
                <div class="alert alert-danger"> Már létezik ilyen felhasználó!</div>
            @break
        @case('found_phoneNumber-fail')
                {{-- Duplikált telefonszámot akar megadni de ezt ne mondjuk el biztonsági szempontok miatt--}}
                <div class="alert alert-danger"> Hiba történt!!</div>
            @break
        @case('found_email-fail')
                {{-- Duplikált emailt akar megadni de ezt ne mondjuk el biztonsági szempontok miatt--}}
                <div class="alert alert-danger"> Hiba történt!</div>
            @break
        @case('error')
                <div class="alert alert-danger"> Általános hiba történt! Próbálja meg később!</div>
            @break

        @case('create-fail')
                <div class="alert alert-danger"> Sikertelen a felhasználó létrehozás!</div>
            @break
        @case('update-fail')
                <div class="alert alert-danger"> Sikertelen frissítés!</div>
            @break
        @case('addEmail-fail')
                <div class="alert alert-danger"> Sikertelen hozzáadás!</div>
            @break
        @case('delete-fail')
                <div class="alert alert-danger"> Sikertelen felhasználó törlés!</div>
            @break
        @case('upload-fail')
            <div class="alert alert-danger"> Sikertelen kép feltöltés!</div>
            @break
    @endswitch
</div>

<form action="/">
    <input type="submit" value="Kezdőoldal">
</form>
