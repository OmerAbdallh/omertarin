@extends ("product.layout")
@section("content")
<div class="container">
        <div class="col">
                    <div class="jumbotron ">
                    <h1 class="display-4">Profile</h1>
                    <p class="lead"></p>
                    <hr class="my-4">
                    <p>Click on </p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{route('home')}}" role="button">Go To Home Pag</a>

                    </p>
            </div>

        </div>
    </div>
       
    <table class="table" border="1">
    <thead>
        <tr>
            
            <th scope="col">Name</th>
            <th scope="col">Cantery</th>
            <th scope="col">gender</th>
            <th scope="col">jop</th>
            <th scope="col">facbook</th>

        </tr>
    </thead>
    <tbody>
        <tr>
<div class="crad">
<div class="card-body"> 
    
    <td><h4  class="card-title text-center ">{{$user->name}}</h4></td>
    <td><h4><p class="card-title  ">{{$user->profile->cantery}}</p></h4></td>
    <td><h4  class="card-title text-center ">{{$user->profile->gender}}</h4>  </td>
    <td><h4  class="card-title text-center ">{{$user->profile->jop}}</h4>  </td>
    <td><h4  class="card-title text-center ">{{$user->profile->facbook}}</h4>  </td>
</div>
</div>
</tr>
</tbody>
</table>
<div class="col mt-6">
<a class="btn btn-primary btn-lg" href="{{route('profile.edit')}}" role="button">Edit</a>
</div>

</div>


@endsection