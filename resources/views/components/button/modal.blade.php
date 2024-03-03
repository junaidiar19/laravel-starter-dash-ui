@props(['url', 'className' => 'open-modal'])

<button {!! $attributes !!} hx-get="{{ route('admin.modal') }}" hx-target=".open-modal-content" hx-trigger="click"
    data-bs-toggle="modal" data-bs-target=".{{ $className }}">
    {{ $slot }}
</button>
