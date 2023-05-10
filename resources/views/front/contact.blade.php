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

    <div class="col-8 mx-auto">
        <hr>
        Patch usage Form
        <form action="{{ route('user.update', ['id' => 9]) }}" method="POST" class="mt-3">
            @method('PATCH')                        {{-- create patch method 1 --}}
            {{-- {{ method_field('PATCH') }} --}}   {{-- create patch method 2 --}}
            @csrf   {{-- create token method 1 --}} 
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}   {{-- create token method 2 --}}
            <input type="email" name="email" class="form-control">
            <br>
            <button class="btn btn-success" type="submit">Send</button>
        </form>
    </div>

    <div class="col-8 mx-auto">
        <hr>
        Put usage Form
        <form action="{{ route('user.updateAll', ['id' => 9]) }}" method="POST" class="mt-3">
            @method('PUT')                        {{-- create patch method 1 --}}
            {{-- {{ method_field('PATCH') }} --}}   {{-- create patch method 2 --}}
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
        Delete Usage 
        <form action="{{ route('user.delete', ['id' => 9]) }}" method="POST" class="mt-3">
            @method('DELETE')                        {{-- create patch method 1 --}}
            {{-- {{ method_field('PATCH') }} --}}   {{-- create patch method 2 --}}
            @csrf   {{-- create token method 1 --}} 
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}   {{-- create token method 2 --}}
            <button class="btn btn-success" type="submit">Send</button>
        </form>
    </div>
@endsection

@section("js")

@endsection