<!doctype html>
<html lang="en">

<head>
    <title> Create Post - CKEditor Example </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>


</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-12 text-right">
                <a href="{{ url('post') }}" class="btn btn-danger"> Back </a>
            </div>
        </div>

        <form action="{{url('save-post')}}" method="POST">
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
                            <h4 class="card-title"> ئاددى يازما تەھرىرلەش قورالىس </h4>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label> Language </label>
                                <input type="text" class="form-control" name="language" placeholder="Enter the Language">
                            </div>
                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" class="form-control" name="title" placeholder="Enter the Title">
                            </div>
                            <div class="form-group">
                                <label> category </label>
                                <input type="text" class="form-control" name="category" placeholder="Enter the category">
                            </div>
                            <div class="form-group">
                                <label> sub_category </label>
                                <input type="text" class="form-control" name="sub_category" placeholder="Enter the sub_category">
                            </div>
                            <div class="form-group">
                                <label> Content </label>
                                <textarea class="form-control" id="content" placeholder="Enter the content" name="content"></textarea>
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

<script>
$(document).ready(function(){
    $('#content').trumbowyg({
        svgPath: "{{asset('/icons.svg')}}"
    });
})
</script>
</body>

</html>