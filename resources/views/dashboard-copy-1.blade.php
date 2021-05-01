<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            باشقۇرۇش بېتى
        </h2>
    </x-slot>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form id="add-video-form" method="post" action="{{url('/video/store')}}">
       @csrf
        <div class="form-group">
            <label class="h2 bold" for="title">Input video Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="v-title" placeholder="Enter Title">
            <small id="v-title" class="form-text text-muted">name your video with a awesome name</small>
        </div>

        <div class="form-group">
            <label class="h2 bold" for="url">Input video address</label>
            <input type="text" class="form-control" id="url" name="url" aria-describedby="v-url" placeholder="Enter URL">
            <small id="v-url" class="form-text text-muted">eg: http://youtube.com/...</small>
        </div>

        <div class="form-group">
            <label for="category" class="h2 bold">Category</label>
            <select class="form-control" id="category" name="category">
                <option value="new">new</option>
                <option value="old">old</option>
            </select>
        </div>
        <div class="form-group">
            <label for="sub_category" class="h2 bold">Sub Category</label>
            <select class="form-control" id="sub_category" name="sub_category">
                <option value="new">new</option>
                <option value="old">old</option>
            </select>
        </div>
        <div class="form-group">
            <label for="language"class="h2 bold">language</label>
            <select class="form-control" id="language" name="language">
                <option value="uyghur">ئۇيغۇرچە</option>
                <option value="english">English</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app-layout>