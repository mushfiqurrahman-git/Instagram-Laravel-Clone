<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<div class="container">
    <div class="row">
    <div class="col-5 offset-3">
    <div class="row">
        <h2>Update Profile</h2>
    </div>

<form method="POST" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div>
        <x-label for="title" :value="__('Title')" />

        <x-input  id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title') ?? $user->profile->title" autofocus />
        @if($errors->has('title'))
        <strong>Required Field</strong>
        @endif
</div>

<div>
        <x-label for="description" :value="__('Description')" />

        <x-input  id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description') ?? $user->profile->description" autofocus />
        @if($errors->has('description'))
        <strong>Required Field</strong>
        @endif
</div>

<div>
        <x-label for="url" :value="__('url')" />

        <x-input  id="url" class="block mt-1 w-full" type="text" name="url" :value="old('url') ?? $user->profile->url" autofocus />
        @if($errors->has('url'))
        <strong>URL is not valid</strong>
        @endif
</div>

<div class="row">
    <label for="image" class="col-md-4 col-form-label">Profile Image</label>

    <input type= "file" class="form-control-file" id="image" name="image">
</div>
@if($errors->has('image'))
<strong>Required Field</strong>
@endif
<div class="row col-4 pt-4">
    <button class="btn btn-primary">Save Profile</button>
</div>

</div>
</div>
    </div>
</form>
</x-app-layout>