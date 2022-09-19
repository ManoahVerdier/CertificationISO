<header>
    <div class="container" id="header-main">
        <div class="row h-100">
            <div class="col-6 col-md-3 align-self-center">
                <div id="logo" class="px-md-3 px-0 mt-2 mb-2">
                    <a href="{{url('/')}}" class="d-inline-block h-50 w-100 mb-1">
                        <img class=" mx-auto" src="{{asset('img/header/logo.png')}}"/>
                    </a>
                </div>
            </div>
            <div class="d-none d-md-block col-3 align-self-center">
                <div id="devis-btn" class=" text-center">
                    <a href="{{route('contact')}}">
                        <span class="grey mr-1">DEMANDER</span>
                        <span class="yellow"> UN DEVIS</span>
                        <span class="devis-icon btn btn-circle btn-yellow ml-2"><i class="fas fa-euro-sign"></i></span>
                    </a>
                </div>
            </div>
            <div class="d-none d-md-block col-2  align-self-center">
                <div id="contact-btn" class="text-center">
                    <a href="tel:0482534478" class='btn btn-blue rounded-pill font-weight-bold px-3'>
                        <span>04 82 53 44 78</span>
                        <span class="ml-3 contact-icon text-white"><img height="20px" width="20px" src="{{asset('img/header/headset.png')}}"/></span>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-3 align-self-center">
                <div id="search" class="">

                        <form method="post" action="{{route('recherche')}}" class="input-group border rounded">
                            @csrf
                            <input name="search" type="text" placeholder="Recherche" class="pl-1 pl-md-3 form-control border-0" aria-describedby="search">
                            <div class="input-group-append">
                                <button class="btn px-1 px-md-2" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
   
                </div>
            </div>
            <div class="col-1 d-none d-md-block align-self-center">
                <button id="show-menu" class="btn btn-blank" onclick="$('#menu').toggleClass('hidden')"><div class="blue"><img src="{{asset('/img/header/menu_img.png')}}"/></div></button>
            </div>
        </div>
    </div>
</header>

<div id='menu' class="position-fixed h-100 w-100 hidden">
    <div class='wrap w-100 h-100'>
        <div class="d-md-inline-block w-70 h-100 float-left d-none" id='menu-background' onclick="$('#menu').toggleClass('hidden')"></div>
        <div id="inner-menu" class="d-inline-block w-md-30 w-sm-100 float-right bg-light-grey h-100">
            <div class="container">
                <div class='row w-100 mb-5'>
                    <div class="col-12 text-right pr-0">
                        <button class="btn btn-blank" id='close-menu' onclick="$('#menu').toggleClass('hidden')">X</button>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg px-1 navbar-light position-relative">

                    <div class="collapse navbar-collapse collapse show" id="menu-nav">
                        
                        <ul class="navbar-nav mt-2 mt-lg-0 row w-100 mx-0 muli-bold">
                            <li class="nav-item col-12 text-left dropdown position-relative border-bottom border-blue pt-3 px-0">
                                <a class="nav-link dark-grey dropdown-toggle h5 pb-3 pl-3" href="#" id="domaines" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Conseil @if($hp->conseil_libelle ?? false) {{$hp->conseil_libelle}} @endif
                                </a>
                                <div class="dropdown-menu bg-blue" aria-labelledby="domaines" id="domaines-sub">
                                    <div class="container px-0">
                                        <div class="row w-100 mx-0">
                                            @foreach($conseils_header as $conseil)
                                                <div class="col-12 text-left pl-0">
                                                    <a class="dropdown-item pl-3" href="{{route('conseil_slug', ['conseil' => $conseil->slug])}}">Conseil {{$conseil->certification}}</a>
                                                </div>
                                            @endforeach
                                            <div class="col-12 text-left pl-0">
                                                <a class="dropdown-item pl-3" href="{{route('audit-interne-qualite-externalise')}}">Audit interne qualité externalisé</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item col-12 text-left dropdown position-relative border-bottom border-blue pt-3 px-0">
                                <a class="nav-link dark-grey dropdown-toggle h5 pb-3 pl-3" href="#" id="domaines" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Formation
                                </a>
                                <div class="dropdown-menu bg-blue" aria-labelledby="domaines" id="domaines-sub">
                                    <div class="container px-0">
                                        <div class="row w-100 mx-0">
                                            @foreach($formations_header as $formation)
                                                <div class="col-12 text-left pl-0">
                                                    <a class="dropdown-item pl-3" href="{{route('formation_slug', ['formation' => $formation->slug])}}">{{$formation->nom}}</a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item col-12 text-left dropdown position-relative border-bottom border-blue pt-3 px-0">
                                <a class="nav-link dark-grey dropdown-toggle w-100 d-inline-block py-2 h5 pb-3 pl-3" href="#" id="infos-pratiques" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">A propos</a>
                                <div class="dropdown-menu bg-blue mt-0" aria-labelledby="infos-pratiques" id="infos-pratiques-sub">
                                    <div class="container px-0">
                                        <div class="row w-100 mx-0">
                                                <div class="col-12 text-left pl-0">
                                                    <a class="dropdown-item pl-3" href="{{route('aPropos')}}">A propos de nous</a>
                                                </div>
                                                <div class="col-12 text-left pl-0">
                                                    <a class="dropdown-item pl-3" href="{{route('clients')}}">Nos clients</a>
                                                </div>
                                                <div class="col-12 text-left pl-0">
                                                    <a class="dropdown-item pl-3" href="{{route('partenaires')}}">Nos partenaires</a>
                                                </div>
                                                <div class="col-12 text-left pl-0">
                                                    <a class="dropdown-item pl-3" href="{{route('contact_recrutement')}}">Recrutement</a>
                                                </div>
                                                <div class="col-12 text-left pl-0">
                                                    <a class="dropdown-item pl-3" href="{{route('faqs')}}">FAQ</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item col-12 text-left border-bottom border-blue py-3 pb-2 px-0">
                                <a class="pl-3 w-100 d-inline-block py-2 h5 dark-grey" href="{{route('contact')}}">Contact</a>
                            </li>

                            <li class="nav-item col-12 text-left border-bottom border-blue py-3 pb-2 px-0">
                                <div id="search" class="my-2">
                                    <form method="post" action="{{route('recherche')}}" class="input-group mb-3 border rounded">
                                        @csrf
                                        <input name="search" type="text" placeholder="Recherche" class="pl-1 pl-md-3 form-control border-0" aria-describedby="search">
                                        <div class="input-group-append">
                                            <button class="btn px-1 px-md-2" type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>