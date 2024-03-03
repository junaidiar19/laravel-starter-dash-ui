@props(['placeholder' => '-Tahun-', 'currentYear' => @$_GET['year']])

{{-- select year from 2023 --}}
<select class="form-select" name="year">
    <option value="">{{ $placeholder }}</option>
    @for ($i = 2023; $i <= date('Y'); $i++)
        <option value="{{ $i }}" {{ $currentYear == $i ? 'selected' : '' }}>{{ $i }}</option>
    @endfor
</select>
