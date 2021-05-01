@extends('dashboard.master')

@section('dash')
<div class="container mt-5">
        <div class="row">
            <div class="col-xl-12 text-right">
                <a href="{{ url('/dashboard/category') }}" class="btn btn-danger"> Back </a>
            </div>
        </div>

        <form action="{{url('dashboard/category/store')}}" method="POST">
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
                            <h4 class="card-title"> Add a category</h4>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label> Name </label>
                                <input type="text" class="form-control" name="name" placeholder="Enter the Name">
                            </div>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label> Language </label>
                                <input type="text" class="form-control" name="language" placeholder="Enter the Language">
                            </div>
                            <div class="form-group">
                                <label> position </label>
                                <input type="number" class="form-control" name="position" placeholder="Enter the Position">
                            </div>
                            <div class="form-group">
                                <label> Do you want to set this category for home page? </label>
                                <input type="number" class="form-control" name="is_home">
                            </div>
                            <div class="form-group">
                                <label> Category Image </label>
                                <input class="form-control" placeholder="Enter the Image Url" name="category_image"></input>
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