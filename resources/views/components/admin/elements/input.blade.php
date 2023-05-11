@php

    if (empty($id)) {
        $id = uniqid('input-');
    }
@endphp

<div class="{{ $parentClass ?? '' }}">
    @isset($label)
    <label for="{{ $id }}" class="form-label {{ $labelClasses ?? '' }}">{{ $label }}</label>        
    @endisset
    <input 
        type="{{ $type ?? 'text' }}" 
        name="{{ $name ?? '' }}" 
        id="{{ $id }}" 
        class="{{ $type !='submit' && $type !='checkbox' && $type !='button' ? 'form-control' : '' }} {{ $inputClasses ?? '' }}" 
        placeholder="{{ isset($placeholder) ? $placeholder : ( isset($label) ? $label : '' ) }}"
        value="{{ $defaultValue ?? '' }}"
        {{ isset($isDisabled) && $isDisabled ? "disabled" : "" }}>
</div>