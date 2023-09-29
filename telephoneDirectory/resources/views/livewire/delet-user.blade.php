<div>
    <form wire:submit.prevent="delete">
        <label>
            Kit szeretne törölni?
            Adja meg az email címét és törölje:
            <input type="email" wire:model="form.email" placeholder="Email cím">
        </label>
        <div>
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <br>
        <button>Törlés</button>
    </form>
</div>
