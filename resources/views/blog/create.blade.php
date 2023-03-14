@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left mt-3">
    <div class="py-15">
        <h1 class="text-6xl">
            Create Post
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-3">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        
        <div class="form-floating mb-3">
          <input type="text" name="title" class="form-control" id="floatingInput" placeholder="Title...">
         <label for="floatingInput">titre</label>
       </div>
        

        <div class="form-floating">
           <textarea name="description" class="form-control" placeholder="Description..." id="floatingTextarea"></textarea>
           <label for="floatingTextarea">Description</label>
        </div>

        

        <div class="mb-3">
          <label for="formFile" class="form-label">Select a file</label>
          <input class="form-control" type="file"name="image" id="formFile">
        </div>

        <button    
            type="submit"
            class="btn btn-primary mt-2">
            Submit Post
        </button>
    </form>
</div>

@endsection