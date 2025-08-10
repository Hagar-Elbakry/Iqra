<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-light border fw-semibold text-uppercase px-4 py-2 shadow-sm']) }}>
    {{ $slot }}
</button>
