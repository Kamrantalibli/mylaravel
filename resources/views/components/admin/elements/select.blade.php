@php

    if (empty($id)) {
        $id = uniqid('input-');
    }
@endphp

<div class="{{ $parentClass ?? '' }}">
    @isset($label)
    <label for="{{ $id }}" class="form-label {{ $labelClasses ?? '' }}">{{ $label }}</label>        
    @endisset

        <select 
        name="{{ $name ?? '' }}"
        id="{{ $id }}"
        class="form-control {{ $inputClasses ?? '' }}"
        {{ isset($isDisabled) && $isDisabled ? "disabled" : "" }}>
        @foreach ($options as $key => $value)
            <option {{ isset($defaultValue) && $defaultValue == $key ? 'selected' : '' }}  value="{{ $key }}">{{ $value }}</option>   
        @endforeach
        </select>



</div>