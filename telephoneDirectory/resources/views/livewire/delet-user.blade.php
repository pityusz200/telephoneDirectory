<div>
    <form wire:submit.prevent="delete">
        <label>
            Kit szeretne törölni?
            Adja meg az email címét és törölje:
            <input type="text" wire:model="mainEmail" placeholder="Email cím">
        </label>
        <div>
            @error('mainEmail') <span class="error">{{ $message }}</span> @enderror
        </div>
        <br>
        <button>Törlés</button>
    </form>
</div>
