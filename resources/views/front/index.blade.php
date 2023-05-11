@extends("layouts.front")

@section("css")

@endsection
 
@section("content")
    <form action="" method="POST">
        @csrf
        @method('DELETE')
        @auresMethod("kamran")
        <input type="text" name="fullname">
        <button type="submit">Send</button>
    </form>
    <hr>
    <hr>
    <hr>
    <hr>
        Content zone
    <hr>

    İncoming age value: {{ $age ?? @$person->age}}
    <hr>
    İncoming name value: {{ $name ?? @$person->aa}}  {{-- @ ->this simvol runs the code even if there is an error  --}}
    <hr>
    @if (isset($person) && isset($person->age))
        @switch($person->age)
            @case(10)
                Child
                @break
            @case(20)
                Youth
                @break
            @default
                You are old
        @endswitch
    @else
        Not incoming
    @endif
    <hr>
@endsection

@section("js")

@endsection