@extends("layouts.front")

@section("css")

@endsection

@section("content")
    <x-admin.layouts.card class="w-50 mx-auto mt-5">
        <x-slot name="title">Create New Article</x-slot>
        <x-slot name="content">
            <form action="" class="w-100 text-start">
                {{-- <div class="form-group mt-3">
                    <label for="name" class="form-label">Article name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Article name">
                </div> --}}

                <x-admin.elements.input 
                    :labelClasses="'text-danger'" 
                    :id="'name'" 
                    :name="'name'" 
                    :inputClasses="''" 
                    :placeholder="'Article name'"
                    :isDisabled="false"
                    :defaultValue="''"
                    :type="'text'"
                    :parentClass="'mt-3'">

                    <x-slot:label>Atricle Name</x-slot:label>
                </x-admin.elements.input>

                <div class="form-group mt-3">
                    <label for="category" class="form-label">Article category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="-1">Select Article</option>
                        <option value="1">PHP</option>
                        <option value="2">C#</option>
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label for="articleContent" class="form-label">Article content</label>
                    <textarea name="articleContent" id="articleContent" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group mt-3 d-flex align-items-center gap-3">
                    <label for="status" class="form-label m-0">Article publish</label>
                    <input type="checkbox" name="status" id="status" class="form-check">
                </div>

                <x-admin.elements.input 
                    :id="'btnSave'" 
                    :inputClasses="'btn btn-success w-100'" 
                    :defaultValue="'Save'"
                    :type="'submit'"
                    :parentClass="'mt-3'" />
            </form>
        </x-slot>
        <x-slot name="footer">Lorem, ipsum dolor.</x-slot>
    </x-admin.layouts.card>


@endsection

@section("js")

@endsection