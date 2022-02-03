@extends ("product.layout")

@section('content')
<div class="container">
        <div class="col">
                    <div class="jumbotron ">
                    <h1 class="display-4">Home</h1>
                    <p class="lead">This IS The Home Pag</p>
                    <hr class="my-4">
                    <p> </p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{route('posts')}}" role="button">All Posts</a>
                        <a class="btn btn-primary btn-lg" href="{{route('product.index')}}" role="button"></i>Products</a>

                    </p>
            </div>

        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                    <p class="lead">
                    <p>You are logged in! Click Here to go You Profile</p>
                    <a class="btn btn-primary btn-lg" href="{{route('profile')}}" role="button">Profile</a>
                    </p>

                </div>
                <div>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
