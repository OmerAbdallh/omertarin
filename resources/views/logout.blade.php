@extends ("product.layout")

@section('content')
            @guest
        <li class="nav-item">
          <a class="nav-link" href="{{/Logout}}">Logout</a>
        </li>
        @endguest