<footer class='p-3 mt-5'>
    <div class="container">    
        <div class="row pt-3">
            <div class="col-12 col-md-6 text-left py-2 contact">
                <p class="ml-4 title pretty mb-0 mt-4">Besoin d'un conseil ?</p>
                <a href="{{route('contact')}}" class="ml-4 text-uppercase w-100 d-inline-block blue h4 mt-0 font-weight-bold muli-bold">Contactez-nous !</a>
                <a href="tel:+33482534478" class="ml-4 w-100 d-inline-block dark-grey h5 mb-0 mt-3"><b>04 82 53 44 78</b></a>
                <a href="mailto:contact@cyn-communication.fr" class="ml-4 w-100 d-inline-block blue h3 font-weight-bold ">contact@cyn-communication fr</a>
                {{--
                    <p class="title pt-5 text-left mb-4"><b>Qualité et certification</b></p>
                    <img src="{{asset('img/footer/qualiopi.png')}}"/>
                    <img src="{{asset('img/footer/datadock.webp')}}"/>
                --}}
            </div> 
            <div class="col-12 col-md-6 mt-4 mt-md-0 bg-blue text-white pt-5 pl-5">
                <p class="title mb-2 text-left pretty">Suivez-nous</p>
                <a href="{{route('contact')}}" class="w-100 d-inline-block blue h5 font-weight-bold text-left mt-4 mb-5">
                    <img src="{{asset('img/footer/LinkedIn.webp')}}"/>
                </a>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12 col-md-6 my-5 text-left pl-5 py-2 contact">
                <p class="ml-4 title pretty mb-0">Besoin d'un conseil ?</p>
                <a href="{{route('contact')}}" class="ml-4 text-uppercase w-100 d-inline-block blue h4 mt-0 font-weight-bold muli-bold">Contactez-nous !</a>
            </div>
            <div class="col-12 col-md-6 my-5 text-left pl-5 pb-2 pt-1">
                <a href="tel:+33482534478" class="ml-4 w-100 d-inline-block dark-grey h5 mb-0"><b>04 82 53 44 78</b></a>
                <a href="mailto:contact@cyn-communication.fr" class="ml-4 w-100 d-inline-block blue h3 font-weight-bold ">contact@cyn-communication fr</a>
            </div>
            <div class="col-12 text-center">
                <span>{{env('APP_NAME')}} - Copyright 2021 - Tous droits reserves. | </span>
                <a href="{{route('mentions_legales')}}">Mentions legales</a> | <span> 
                
            </div>
        </div>
    </div>
</footer>