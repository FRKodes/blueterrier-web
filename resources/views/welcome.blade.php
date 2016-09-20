<!DOCTYPE html>
<html>
    <head>
        @include('partials.metas')
        @include('partials.styles')
    </head>
    <body>
        @include('partials.nav')
        <div class="container-fluid">
            <div class="row banner">
                <div class="banner-home">
                    <div class="item pistones"></div>
                </div>
                <div class="banner-text">
                    <h2 class=""><span>Nos apasiona lo que hacemos, amamos la calidad.</span></h2>
                    <p>Nuestra pasión por el trabajo que realizamos lo enfocamos en un sólo objetivo: ¡TU ÉXITO!</p>
                    <a href="#" class="text-center" title="Contact Us, hit us an email."><span class="btn-bt">Contact Us</span><span class="icon-flecha link"></span></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="works-home">
                <div class="item-work first"></div>
                <div class="item-work"></div>
                <div class="item-work"></div>
                <div class="item-work"></div>
            </div>
        </div>
        <script href="{{ elixir('js/all.min.js')}}"></script>
    </body>
</html>
