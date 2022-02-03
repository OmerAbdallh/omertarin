@extends ("product.layout")
@section("content")
<div class="container">
<div class="row">
        <div class="col">
                    <div class="jumbotron ">
                    <h1 class="display-4">Create Pag</h1>
                    <p class="lead">To Add </p>
                    <hr class="my-4">
                    <p>Click on "All Post" to go Posts </p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{route('posts')}}" role="button">All Posts</a>
                    </p>
            </div>

        </div>
    </div>

        <div class="row">
            <div class="col">
            <form action="{{route('posts.store')}}" method="POST" class="mt-3" enctype="multipart/form-data" >
@CSRF

<div class="form-group ">
    @if(count($errors)>0)
    @foreach($errors->all as $error)
    <div class='alert alert-danger'>
        {{$error}}

    

    @endforeach
    @endif 
</div>
    <div class="form-group mt-5">
        <label for="exampleFormControlInput">Title</label>
        <input type="text" name="title" class="form-control"  placeholder="wite Title name">
    </div>
    <div class="form-group mt-5">
        <label for="exampleFormControlInput">Photo</label>
        <input type="file" name="photo" class="form-control"  placeholder="Select you photo">
    </div>

        <div class="form-group ">
            <label for="exampleFormControlInput">content</label>
            <textarea  class="form-control" name="content" placeholder="wite you content" ></textarea>
        </div>
        <div class="form-group ">
        <button type="submit"class="btn btn-primary mt-3" >save</button>
        </div>
    
</form>

            </div>

        </div>

</div>

@endsection