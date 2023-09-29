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
            <input type="text" wire:model="form.email"  placeholder="Email cím">
        </label>
        <div>
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <label>
            Telefonszám:
            <input type="text" wire:model="form.phone_number"  placeholder="Telefonszám">
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

    <form wire:submit.prevent="addPhoto">
        Adj hozzá fotót is egy email címmel <br>
        <label>
            Email cím:
            <input type="text" wire:model="form.emailPhoto"  placeholder="Email cím">
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
