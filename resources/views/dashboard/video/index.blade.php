@extends('dashboard.master')

@section('dash')
<div class="container">
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Language</th>
        <th scope="col">Artists</th>
        <th scope="col">Duration</th>
        <th scope="col">Category</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    @foreach($videos as $video)
    <tbody>
      <tr class="pb-3 border-bottom border-secondary">
        <th scope="row" class="w-25">{{$video->title ?? ''}}</th>
        <td>{{$video->language ?? ''}}</td>
        <td>{{$video->artists ?? ''}}</td>
        <td>{{$video->duration ?? ''}}</td>
        <td>{{$video->category->name ?? ''}}</td>
        <td>
          <div class="d-flex align-items-center my-0">
            <a class="btn btn-primary" href="{{url('/dashboard/video/'.$video->id.'/edit')}}"><i class="far fa-edit"></i></a>
            <form action="{{url('/dashboard/video/'.$video->id.'/delete')}}" method="post">
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
  {{ $videos->links() }}
  </div>
</div>
@stop