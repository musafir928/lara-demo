<!doctype html>
<html lang="en">
  <head>
    <title> Post Listing </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
      <div class="container mt-4">
        <div class="row">
            <div class="col-xl-8">
                <h3 class="text-right"> CK Editor Implementation in Laravel 8 </h3>
            </div>

            <div class="col-xl-4 text-right">
                <a href="{{url('create-post')}}" class="btn btn-primary"> Add Post </a>
            </div>
        </div>

        @if(count($posts) > 0)
          <div class="table-responsive mt-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> Id </th>
                        <th style="width:30%;"> Title </th>
                        <th> Decription </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post) 
                        <tr>
                            <td> {{ $post->id }} </td>
                            <td> {{ $post->title }} </td>
                            <td> {!! html_entity_decode($post->description) !!} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>

          {{ $posts->links() }}
        @endif
      </div>      
  </body>
</html>