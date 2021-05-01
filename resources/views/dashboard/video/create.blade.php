@extends('dashboard.master')

@section('dash')
<div class="container mt-5">
    <div class="row">
        <div class="col-xl-12 text-right">
            <a href="{{ url('/dashboard/video') }}" class="btn btn-danger"> Back </a>
        </div>
    </div>

    <form action="{{url('dashboard/video/store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">

                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ Session::get('success') }}
                </div>
                @elseif(Session::has('failed'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ Session::get('failed') }}
                </div>
                @endif

                <div class="card shadow">

                    <div class="card-header">
                        <h4 class="card-title"> Add a Video</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label> Title </label>
                            <input type="text" class="form-control" name="title" placeholder="Enter the Title">
                        </div>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label> Language </label>
                            <input type="text" class="form-control" name="language" placeholder="Enter the Language">
                        </div>
                        @error('language')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label> Url (Iframe) </label>
                            <input type="text" class="form-control" name="url" placeholder="Enter the Position">
                        </div>
                        <div class="form-group">
                            <label> Artists </label>
                            <input type="text" class="form-control" name="artists" placeholder="Enter the Position">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label> category </label>
                                <select class="custom-select" id="inputGroupSelect01" name="category_id">
                                    <option selected>Choose...</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label> Sub category </label>
                                <input type="text" class="form-control" name="sub_category">
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Video Image </label>
                            <input class="form-control" placeholder="Enter the Image Url" name="video_image"></input>
                        </div>
                        @error('video_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label> Duration </label>
                                <input class="form-control" placeholder="Enter the Duration" name="duration"></input>
                            </div>
                            <div class="col-sm-6">
                                <label> Date Release </label>
                                <input class="form-control" placeholder="Enter the release date" name="date_release"></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Description </label>
                            <textarea class="form-control" placeholder="Enter the Description" name="description"></textarea>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"> Save </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@stop