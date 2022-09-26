<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<div class="container">
    <div class="row">
    <div class="col-5 offset-3">
    <div class="row">
        <h2>Add New Post</h2>
    </div>

<form method="POST" action="/p" enctype="multipart/form-data">
    @csrf

    <!-- Name -->
    <div>
        <x-label for="caption" :value="__('Post Caption')" />

        <x-input  id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')" autofocus />
        @if($errors->has('caption'))
        <strong>Required Field</strong>
        @endif
</div>
<div class="row">
    <label for="image" class="col-md-4 col-form-label">Post Image</label>

    <input type= "file" class="form-control-file" id="image" name="image">
</div>
@if($errors->has('image'))
<strong>Required Field</strong>
@endif
<div class="row col-4 pt-4">
    <button class="btn btn-primary">Add New Post</button>
</div>

</div>
</div>
    </div>
</form>
</x-app-layout>