<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="row">
        <div class="col">
            <a href="/categories/create" class="btn btn-primary float-end my-2">Add Category</a>
        </div>
    </div>
    @if ($categories->isEmpty())
        <div class="center">
            <h4>Data not found or empty!</h4>
        </div>
    @else
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $category->category }}</td>
                        <td>
                            <a href="/categories/edit/{{ $category->id }}"
                                class="btn btn-sm btn-info text-white">Edit</a>
                            <button wire:click='destroy({{ $category->id }})'
                                class="btn btn-sm btn-danger text-white">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
