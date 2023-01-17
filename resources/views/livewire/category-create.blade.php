<div>
    <form wire:submit.prevent='store'>
        <div class="mb-3">
            <label for="category" class="form-label">Category Name</label>
            <input wire:model.defer='category' type="text"
                class="form-control @error('category')
                is-invalid
            @enderror" id="category">
            @error('category')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
