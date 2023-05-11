{{-- <input type="{{ $type ?? 'text' }}" placeholder="{{ $placeholder ?? '' }}" {{ $attributes->merge(['class' => $attributes['class'] . $color])}}> --}}


<input type="{{ $type ?? 'text' }}" placeholder="{{ $placeholder ?? '' }}" {{ $attributes->class(['bg-danger' => $error, 'text-white' => $error]) }}>