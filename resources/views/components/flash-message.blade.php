@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed top-0 left-1/2 transform bg-laravel -translate-x-1/2 text-white px-4 py-3">
        <p class="align-center">
            {{ session('message') }}
        </p>
    </div>
@endif
