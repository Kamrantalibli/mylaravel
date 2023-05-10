@extends("layouts.front")

@section("css")

@endsection
 
@section("content")
    <hr>
        Content zone
    <hr>

    İncoming age value: {{ $age ?? $person->age}}
    <hr>
    İncoming name value: {{ $name ?? @$person->aa}}  {{-- @ ->this simvol runs the code even if there is an error  --}}
    <hr>
@endsection

@section("js")

@endsection