@php

    if (empty($id)) {
        $id = uniqid('input-');
    }
@endphp

<div class="{{ $parentClass ?? '' }}">
    @isset($label)
    <label for="{{ $id }}" class="form-label {{ $labelClasses ?? '' }}">{{ $label }}</label>        
    @endisset

    <textarea 
        name="{{ $name ?? '' }}" 
        id="{{ $id }}" 
        class="form-control {{ $inputClasses ?? '' }}" 
        placeholder="{{ isset($placeholder) ? $placeholder : ( isset($label) ? $label : '' ) }}"
        cols="{{ $cols ?? '30' }}"  
        rows="{{ $rows ?? '10' }}"
        style="{{ $style ?? '' }}"
        {{ isset($isDisabled) && $isDisabled ? "disabled" : "" }}>{{ $defaultValue ?? '' }}</textarea>
</div>