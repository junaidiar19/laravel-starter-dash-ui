@props([
    'href' => request()->fullUrlWithoutQuery([
        'row',
        'search',
        'page',
        'email',
        'type',
        'category',
        'level',
        'area',
        'status',
        'product',
        'month',
        'year',
        'center',
        'customer_name',
        'busdev',
        'order_status',
        'filterBy',
    ]),
])

<a href="{{ $href }}" {!! $attributes->merge(['class' => 'btn border-dark']) !!}>
    <i class="fas fa-sync-alt me-1"></i> Refresh
</a>
