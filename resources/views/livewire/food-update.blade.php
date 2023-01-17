<div>
    <form wire:submit.prevent='update({{ $foodId }})'>
        <div class="mb-3">
            <label for="name" class="form-label">Food Name</label>
            <input wire:model.defer='name' type="text"
                class="form-control @error('name')
                is-invalid
            @enderror" id="price">
            @error('name')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input wire:model.defer='price' type="number"
                class="form-control @error('price')
                is-invalid
            @enderror" id="price">
            @error('price')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select wire:model='categoryId'
                class="form-select @error('categoryId')
                is-invalid
            @enderror">
                <option value="">-- Select Category --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->category }}</option>
                @endforeach
            </select>
            @error('categoryId')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
