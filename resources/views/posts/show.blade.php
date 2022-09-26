<x-app-layout>
    <x-slot name="header">
    </x-slot>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<div class="container">
    <div class="row">
        <div class="col-8">
    <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div>
            <div class="d-flex align-items-center">
                <div class="pr-5">
                    <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:40px">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                        <a href="#" class="pl-3">Follow</a>
                </div>
            </div>
        </div>
                <hr>
                <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}">
                <span class="text-dark">{{$post->user->username}}</span>
                    </a>
                </span>{{$post->caption}}
                </p>
            </div>
        </div>
    </div>
</div>
</x-app-layout>