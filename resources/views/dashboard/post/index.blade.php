@extends('dashboard.master')

@section('dash')
<div class="container">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Language</th>
                <th scope="col">Category</th>
                <th scope="col">Is Popular</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        @foreach($posts as $post)
        <tbody>
            <tr class="pb-3 border-bottom border-secondary">
                <th scope="row" class="w-25 {{$post->language == 'uyghur' ?? rtl}}">{{$post->title ?? ''}}</th>
                <td>{{$post->language ?? ''}}</td>
                <td>{{$post->category->name ?? ''}}</td>
                <td>{{$post->is_popular ?? ''}}</td>
                <td>
                    <div class="d-flex align-items-center my-0">
                        <a class="btn btn-primary" href="{{url('/dashboard/post/'.$post->id.'/edit')}}"><i class="far fa-edit"></i></a>
                        <form action="{{url('/dashboard/post/'.$post->id.'/delete')}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ml-1"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@stop