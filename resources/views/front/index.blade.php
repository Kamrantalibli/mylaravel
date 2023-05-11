@extends("layouts.front")

@section("css")

@endsection
 
@section("content")
    <x-article>
        <x-slot name="title" >Article 1</x-slot>
        <x-slot:title2>Article 2</x-slot:title2>
        <hr>
        <x-slot name="content" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui non nobis, officia, dolor culpa deserunt similique deleniti perferendis cum rem dicta tempora delectus inventore quis. Incidunt, quibusdam sint. Voluptatum, asperiores.</x-slot>
    </x-article>
@endsection

@section("js")

@endsection