<div>
    <form wire:submit.prevent="update">
        Kit szeretne szerkeszteni?
        Adja meg az email címét és írja be a frissíteni kívánt adatot:
        <label>
            <input type="text" wire:model="form.email" placeholder="Keresett email cím">
        </label>
        <div>
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <label>
            Vezetéknév:
            <input type="text" wire:model="form.fname" placeholder="Vezetéknév">
        </label>
        <div>
            @error('fname') <span class="error">{{ $message }}</span> @enderror
        </div>

        <label>
            Utónév:
            <input type="text" wire:model="form.lname"  placeholder="Keresztnév">
        </label>
        <div>
            @error('lname') <span class="error">{{ $message }}</span> @enderror
        </div>
        <br>
        <button>Szerkesztés</button>
    </form>
    <br>
    <form wire:submit.prevent="addEmail">
        <label>
            Email cím hozzáadása:
            <input type="text" wire:model="form.plusEmail"  placeholder="Plusz email cím">
        </label>
        <div>
            @error('plusEmail') <span class="error">{{ $message }}</span> @enderror
        </div>
        Kihez adjuk hozzá?:<br>
        <label>
            Vezetéknév:
            <input type="text" wire:model="form.plusFname"  placeholder="Vezetéknév">
        </label>
        <div>
            @error('plusFname') <span class="error">{{ $message }}</span> @enderror
        </div>
        <label>
            Keresztnév:
            <input type="text" wire:model="form.plusLname"  placeholder="Keresztnév">
        </label>
        <div>
            @error('plusLname') <span class="error">{{ $message }}</span> @enderror
        </div>
        <br>
        <button>Hozzáad</button>
    </form>
</div>
