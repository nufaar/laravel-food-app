<x-app-layout title="Food Update">
    <div class="container">
        <div class="card card-body my-4">
            <h3>Foods</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <livewire:food-update :food="$food" />
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
