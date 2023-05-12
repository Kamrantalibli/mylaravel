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
                    :labelClasses="''" 
                    :id="'name'" 
                    :name="'name'" 
                    :inputClasses="''" 
                    :placeholder="'Article name'"
                    :isDisabled="false"
                    :defaultValue="''"
                    :type="'text'"
                    :parentClass="'mt-3'">

                    <x-slot name="label">Atricle Name</x-slot>
                </x-admin.elements.input>

                <x-admin.elements.select
                    :labelClasses="'form-label'" 
                    :id="'category'" 
                    :name="'category'" 
                    :inputClasses="''"
                    :isDisabled="false"
                    :parentClass="'mt-3'"
                    :options="['-1' => 'Select Article',
                                '1' => 'PHP',
                                '2' => 'C#']"
                    {{-- :defaultValue="'2'" --}}>
                    <x-slot name="label">Article Category</x-slot>
                </x-admin.elements.select>

                <x-admin.elements.textarea
                    :labelClasses="''" 
                    :id="'articleContent'" 
                    :name="'articleContent'" 
                    :inputClasses="''" 
                    :placeholder="'Article content'"
                    :isDisabled="false"
                    :defaultValue="''"
                    :parentClass="'mt-3'"
                    :rows="'5'"
                    :style="'resize:none'">

                    <x-slot name="label">Article Content</x-slot>
                </x-admin.elements.textarea>

                <x-admin.elements.input
                    :labelClasses="'form-label m-0'"
                    :type="'checkbox'"
                    :name="'status'"
                    :id="'status'"
                    :inputClasses="'form-check'"
                    :defaultValue="'1'"
                    :parentClass="'mt-3 d-flex align-items-center gap-3'">

                    <x-slot name="label">Article publish</x-slot>
                </x-admin.elements.input>

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