@extends ("product.layout")
@section("content")

@php 
$genders=['Male' , 'Female']

@endphp

<div class="container">
<div class="row">
        <div class="col">
                    <div class="jumbotron ">
                    <h1 class="display-4">Profile Pag</h1>
                    <p class="lead"></p>
                    <hr class="my-4">
                    <p></p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{ url('home') }}" role="button">Click Here to Go Home Pag</a>
                    </p>
            </div>

        </div>
    </div>
    @if(count($errors)>0)
    @foreach($errors->all as $error)
    <div class='alert alert-danger'>
        {{$error}}

    </div>

    @endforeach
    @endif 



<form method="POST" action="{{route('profile.update')}}"  >
@CSRF
@method('PUT')
    <div class="form-group mt-5">
        <label for="exampleFormControlInput">Name</label>
        <input type="text" name="name" class="form-control" value="{{$user->name}}" >
    </div>
    <div class="form-group mt-5">
        <label for="exampleFormControlInput">Cantery</label>
        <input type="text" name="cantery" class="form-control" value="{{$user->profile->cantery}}" >
    </div>

    <div class="form-group mt-2">
        <label for="example">Gender</label>
        <select name="gender" class="form-group">
           
            @foreach($genders as $gender){
                    <option value="{{$gender}}"{{($user->profile->gender == $gender )? 'selected':''}}>{{$gender}}</option>

                }
            @endforeach

        </select>
    </div>

        <div class="form-group">
    <label for="exampleFormControlInput">Facbook</label>
        <input type="text" name="facbook" class="form-control"  value="{{$user->profile->facbook}}" >
            </div>

        <div class="form-group ">
            <label for="exampleFormControlInput">Jop</label>
            <textarea class="form-control" name="jop" row="3" >
            {{$user->profile->jop}}"
            </textarea>
        </div>
        <div class="form-group ">
        <button type="submit"class="btn btn-primary" >save</button>
        </div>
    
</form>
</div>

@endsection