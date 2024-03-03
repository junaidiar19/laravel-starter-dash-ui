@props(['url' => null, 'title' => 'Anda yakin ingin menghapus data ini?', 'redirect' => null])

<button {!! $attributes->merge(['class' => 'btn btn-danger action-delete']) !!} data-url="{{ $url }}" data-title="{{ $title }}"
    data-redirect="{{ $redirect }}">
    {{ $slot }}
</button>
