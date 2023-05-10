@extends("layouts.front")
 
@section("css")

@endsection

@section("content")
    <div class="col-8 mx-auto">
        Contact Page
        <form action="{{ route("contact") }}" method="POST" class="mt-3">
            @csrf   {{-- create token method 1 --}} 
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}   {{-- create token method 2 --}}
            <input type="text" name="fullname" class="form-control">
            <br>
            <input type="email" name="email" class="form-control">
            <br>
            <button class="btn btn-success" type="submit">Send</button>
        </form>
    </div>

    
    <div class="col-8 mx-auto">
        <hr>
        Contact Page 2
        <form action="{{ route("user", ["id" => 5, "name" => "kamran"]) }}" method="POST" class="mt-3">
            @csrf   {{-- create token method 1 --}} 
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}   {{-- create token method 2 --}}
            <input type="text" name="fullname" class="form-control">
            <br>
            <input type="email" name="email" class="form-control">
            <br>
            <button class="btn btn-success" type="submit">Send</button>
        </form>
    </div>

    
    <div class="col-8 mx-auto">
        <hr>
        Support Form
        <form action="{{ route('support-form.support') }}" class="mt-3">
            @csrf   {{-- create token method 1 --}} 
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}   {{-- create token method 2 --}}
            <input type="text" name="fullname" class="form-control">
            <br>
            <input type="email" name="email" class="form-control">
            <br>
            <button class="btn btn-success" type="submit">Send</button>
        </form>
    </div>
@endsection

@section("js")

@endsection