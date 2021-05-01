@extends('dashboard.master')

@section('dash')
<div class="container">
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Language</th>
        <th scope="col">Position</th>
        <th scope="col">Is_Home</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    @foreach ($categories as $category)
    <tbody>
      <tr class="pb-3 border-bottom border-secondary">
        <th scope="row" class="w-25">{{$category->name}}</th>
        <td>{{$category->language}}</td>
        <td>{{$category->position}}</td>
        <td>{{$category->is_home}}</td>
        <td>
          <div class="d-flex align-items-center my-0">
            <a class="btn btn-primary" href="{{url('/dashboard/category/'.$category->id.'/edit')}}"><i class="far fa-edit"></i></a>
            <form action="{{url('/dashboard/category/'.$category->id.'/delete')}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger ml-1" href=""><i class="far fa-trash-alt"></i></button>
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
    {{ $categories->links() }}
  </div>
</div>
@stop