    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="main_navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              Dropdown
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li></li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </ul>
                              </li>          
                          </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

                <ul class="navbar-nav mr-auto">
                    @foreach($categories as $category)
                        <li class="nav-item dropdown">
                            {{ $category->title }}
                            @if(count($category->childs))
                                @include('manageChild',['childs' => $category->childs])
                            @endif
                        </li>
                    @endforeach
                </ul>    