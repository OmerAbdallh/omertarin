@extends ("product.layout")
@section("content")
<div class="container">
        <div class="col">
                    <div class="jumbotron ">
                    <h1 class="display-4">Posts</h1>
                    <p class="lead"></p>
                    <hr class="my-4">
                    <p>Click on </p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{route('post.create')}}" role="button">Create New Post</a>
                        <a class="btn btn-danger btn-lg" href="{{route('posts.trashed')}}" role="button"><i class="fas fa-2x fa-trash"></i>Trashed Posts</a>

                    </p>
            </div>

        </div>
    </div>
        <div class="row" >
            @if($posts->count()>0)
            <div class="col">

            <table class="table">
    <thead>
        <tr>
            <th scope="col">NO </th>
            <th scope="col">Title</th>
            <th scope="col">Date</th>
            <th scope="col">User</th>
            <th scope="col">Photo</th>
            <th scope="col">Controller</th>
        </tr>
    </thead>
    <tbody>
        @php 
        $x=1
        @endphp
        @foreach($posts as $item)
        <tr>
            <th scope="row">{{$x++}}</th>
            <td>{{$item->title}}</td>
            <td>{{$item->created_at->diffForhumans()}}</td>
            <td>{{$item->user->name}}</td>
            <td>
                <img src="{{URL::asset($item->photo)}}" alt="{{$item->photo}}" class="img-tumbnall" width="100" height="100">
            </td>
                
            <td>
                     <div class="row">
                        <div class="col"> 
                          <a class="text-success" href="{{route('post.show', ['slug'=>$item->slug])}}"> <i class="fas fa-2x fa-eye"></i> show</a>
                          <a class="text-success" href="{{route('post.edit', ['id'=>$item->id])}}"> <i class="fas fa-2x fa-edit"></i> edit</a>
                          <a class="text-denger" href="{{route('post.destroy', ['id'=>$item->id])}}"> <i class="fas fa-2x fa-trash"></i>delete </a>

                    </div>
                       
                    
             
            </td> 
        </tr>
      @endforeach
    </tbody>
</table>
</div>


            @else
            <div class="col">
                <div class="alert alert-danger" role="alert"> No Posts</div>

            </div>

            @endif
            
               

</div>
</div>

@endsection