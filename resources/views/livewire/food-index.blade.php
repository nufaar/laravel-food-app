<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="row">
        <div class="col">
            <a href="/foods/create" class="btn btn-primary float-end my-2">Add Food</a>
        </div>
    </div>
    <div class="row my-3">
        <div class="col">
            <select wire:model='filterCategory' class="form-select w-auto">
                <option value="">None</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <input wire:model='search' type="text" class="form-control" placeholder="Search ...">
        </div>
    </div>
    @if ($foods->isEmpty())
        <h4>Foods data is empty!</h4>
    @else
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($foods as $food)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $food->name }}</td>
                        <td>{{ $food->category->category }}</td>
                        <td>{{ $food->price }}</td>
                        <td>
                            <a href="/foods/edit/{{ $food->id }}" class="btn btn-sm btn-info text-white">Edit</a>
                            <button wire:click='destroy({{ $food->id }})'
                                class="btn btn-sm btn-danger text-white">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
