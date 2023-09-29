<div>
    <form wire:submit.prevent="save">
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

        <label>
            Email cím:
            <input type="email" wire:model="form.email"  placeholder="Email cím">
        </label>
        <div>
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <label>
            Telefonszám:
            <input type="number" wire:model="form.phone_number"  placeholder="Telefonszám">
        </label>
        <div>
            @error('phone_number') <span class="error">{{ $message }}</span> @enderror
        </div>

        <label>
            Lakcím:
            <input type="text" wire:model="form.address"  placeholder="Lakcím">
        </label>
        <div>
            @error('address') <span class="error">{{ $message }}</span> @enderror
        </div>

        <label>
            Levelezési cím:
            <input type="text" wire:model="form.mailing_address" placeholder="Levelezési cím">
        </label>
        <div>
            @error('mailing_address') <span class="error">{{ $message }}</span> @enderror
        </div>
        <br>
        <button>Léterhozás</button><br><br>
    </form>

    <form wire:submit.prevent="addEmail">
        <label>
            Email cím hozzáadása:<br><br>
            <input type="email" wire:model="form.plusEmail"  placeholder="Plusz email cím">
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
    <br>
    <form wire:submit.prevent="addPhoneNumber">
        <label>
            Telefonszám hozzáadása:<br><br>
            <input type="number" wire:model="form.plusPhoneNumber"  placeholder="Plusz telefonszám">
        </label>
        <div>
            @error('plusPhoneNumber') <span class="error">{{ $message }}</span> @enderror
        </div>
        Kihez adjuk hozzá?:<br>
        <label>
            Vezetéknév:
            <input type="text" wire:model="form.plusFnameP"  placeholder="Vezetéknév">
        </label>
        <div>
            @error('plusFnameP') <span class="error">{{ $message }}</span> @enderror
        </div>
        <label>
            Keresztnév:
            <input type="text" wire:model="form.plusLnameP"  placeholder="Keresztnév">
        </label>
        <div>
            @error('plusLnameP') <span class="error">{{ $message }}</span> @enderror
        </div>
        <br>
        <button>Hozzáad</button>
    </form>
    <br>
    <form wire:submit.prevent="addPhoto">
        Adj hozzá fotót is egy email címmel <br><br>
        <label>
            Email cím:
            <input type="email" wire:model="form.emailPhoto"  placeholder="Email cím">
        </label>
        <div>
            @error('emailPhoto') <span class="error">{{ $message }}</span> @enderror
        </div>

        <label>
            Fotó:
            <input type="file" wire:model="form.photo"  placeholder="Fotó">
        </label>
        <div>
            @error('photo') <span class="error">{{ $message }}</span> @enderror
        </div>
        <br>
        <button>Fotó feltöltése</button><br><br>
    </form>
</div>
