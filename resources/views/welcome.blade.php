
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre-Diagnostic </title>
    <!-- Font Awesome -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- MDB -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public/assets/frontend/files/favicon.png')}}">
    <link href="{{url('public/assets/frontend/css/mdb.min.css')}}" rel="stylesheet" />
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{url('public/assets/frontend/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{url('public/assets/frontend/css/fontawesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/frontend/css/all.min.css')}}">

    <style>
        a.disabled {
            position: relative; /* Nécessaire pour positionner ::before */
            display: inline-block;
            text-decoration: none;
            pointer-events: none; /* Désactive le clic */
            cursor: not-allowed;
            width: 70% !important;
            height: 98%;
        }

        a.disabled::before {
            content: "Bientôt Disponible"; /* Texte affiché */
            position: absolute;
            top: 50%; /* Centre verticalement */
            left: 50%; /* Centre horizontalement */
            transform: translate(-50%, -50%); /* Ajuste pour centrer */
            background-color: black;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            z-index: 2; /* Positionne au-dessus de l'image */
            text-align: center;
        }

        a.disabled::after {
            content: ""; /* Fond noir semi-transparent */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Opacité ajustable */
            z-index: 1; /* Juste en dessous du texte */
        }

        a.disabled img {
            opacity: 0.5;
            width: 100% !important;
        }

        a.disabled .light-blue {
            color: #48b2c5;
            left: 30px !important;
        }

        a.disabled .light-blues {
            left: 30px !important;
        }

        .bg-home{
            background-image: url('{{url('public/assets/frontend/img/Fond-1.webp') }}');
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }
        .bg-other{
            background-image: url('{{url('public/assets/frontend/img/fond2.webp') }}');
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }
        .card-sbtitle{
            position:absolute;
            bottom:60px;
            left: 80px;
            width:300px;
            text-align:left;
            line-height:30px;
            font-family:limerick;
            font-size: 35px;
        }
        .light-blue{
            color:#48b2c5;
            left: 152px !important;
        }
        .light-blues{
            color:#48b2c5;
            left: 185px !important;
        }
        .light-brown {
            color:#b2b88f;
            left: 41px !important;
        }
        .blue{
            color:#2563a2;
        }.
    </style>
    <style>
        /*!* Carousel styling *!*/
        /*#introCarousel,*/
        /*.carousel-inner,*/
        /*.carousel-item,*/
        /*.carousel-item.active {*/
        /*    height: 100vh;*/
        /*}*/

        /*.carousel-item:nth-child(1) {*/
        /*    background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');*/
        /*    background-repeat: no-repeat;*/
        /*    background-size: cover;*/
        /*    background-position: center center;*/
        /*}*/

        /*.carousel-item:nth-child(2) {*/
        /*    background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');*/
        /*    background-repeat: no-repeat;*/
        /*    background-size: cover;*/
        /*    background-position: center center;*/
        /*}*/

        /*.carousel-item:nth-child(3) {*/
        /*    background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');*/
        /*    background-repeat: no-repeat;*/
        /*    background-size: cover;*/
        /*    background-position: center center;*/
        /*}*/

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {
                margin-top: -58.59px;
            }
        }

        .navbar .nav-link {
            color: #fff !important;
        }
    </style>
    <style>
        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ffffff; /* Couleur de fond */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        /* Style pour le spinner */
        .spinner {
            border: 8px solid #f3f3f3; /* Couleur du cercle externe */
            border-top: 8px solid #0D437A; /* Couleur de l'animation */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
        }

        /* Animation de rotation */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>

<div id="loader" style="display: none">
    <div class="spinner"></div>
</div>

<!--Main Navigation-->
<header id="first" style="display: none">
    <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 100vh;
        }

        @foreach ($market as $key => $image)
            .carousel-item:nth-child({{ $key + 1 }}) {
                background-image: url('/public{{ Storage::url($image->thumb_url) }}');
                background-repeat: no-repeat;
                background-size: 100% auto;
                background-position: center;
                /*background-size: contain;*/
                /*background-position: center center;*/
            }
        @endforeach



        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {
                margin-top: -58.59px;
            }
        }

        .navbar .nav-link {
            color: #fff !important;
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand nav-link" target="_blank">
                <img style="" src="{{url('public/assets/frontend/files/CentreDiagnostic_invert.png') }}" class="" height="30"
                     loading="lazy" alt="Logo Centre-Diagnostic">
            </a>
            <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>

            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Carousel wrapper -->
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-carousel-init data-mdb-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            @foreach ($market as $key => $image)
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="{{$key}}" {{ $key == 0 ? 'class = active' : '' }}></li>
            @endforeach
        </div>

        <!-- Inner -->
        <div class="carousel-inner">

            @foreach ($market as $key => $image)
                <div class="carousel-item startHome {{ $key == 0 ? 'active' : '' }}">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center" data-mdb-theme="dark">
                                <h1 class="mb-3" style="line-height: 60px;">BIENVENUE SUR VOTRE ESPACE CLIENT <br> DE VOTRE CLINIQUE</h1>
                                <h5 class="mb-4">La passion de vous administrer les meilleurs soins !</h5>
                                <a class="btn btn-secondary btn-rounded btn-lg m-2 startHome" data-mdb-ripple-init href="#"
                                   target="_blank" role="button">Appuyez Pour Commencer !</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- Inner -->
    </div>
    <!-- Carousel wrapper -->
</header>
<!--Main Navigation-->

<div id="avis" class="tabcontent d-none">

    <div class="container-fluid">
        <div class="position-relative p-md-5 text-center vh-100 row bg-hoome d-flex" id="bg-home">
            <div class="col-md-12 mx-auto pt-1 acCadre d-flex justify-content-center align-items-center">
                <div class="row mx-auto my-auto justify-content-center">
                    <div style="position:relative" class="col-md-12 mb-5 text-center">
                        <img src="{{url('public/assets/frontend/files/CentreDiagnostic_invert.png') }}" alt="" srcset="" height="100">
                    </div>
{{--                    <div style="position:relative" class="col-md-12 mb-2 text-start">--}}
{{--                        <h6 style="margin-left:15%" class="text-light font-weight-bold">{{ $param->titre_service ?? "Veuillez sélectionner un service" }}</h6>--}}
{{--                    </div>--}}

{{--                    <div style="position: relative;visibility:visible" class="col-6 mb-3 text-end">--}}
{{--                        <a href="/agence/{{ strtolower($agence->libelle) }}/faq" @if($agence->has_faq === 0) class="tablinks disabled" @endif>--}}
{{--                            <img style="width:70%" src="@if($param->faq_logo) {{asset('/settings/'. $param->faq_logo )}} @else {{asset('assets/backend/dist/img/Homme-sans-texte.jpg')}} @endif" class="img-fluid" alt="Fissure in Sandstone">--}}
{{--                            <span class="card-sbtitle light-blues">{{ $param->faq_stitre ?? 'Je cherche des réponses' }}</span>--}}
{{--                        </a>--}}

{{--                    </div>--}}

                    <!--<a class="tablinks" href="http://10.20.20.41:8080/OnlineBankingGB/#!/login?agence=venus">-->


                    <div style="position: relative;visibility:visible" class="col-3 mb-3 text-end rounded">
{{--                        <a href="#" @if($agence->has_consult === 0) class="tablinks disabled" @endif id="consultData">--}}
                        <a href="/consulter-solde" @if($agence->has_consult === 0) class="tablinks disabled" @endif width="300">
                            <img src="{{url('public/assets/frontend/files/4.png') }}" class="img-fluid rounded" alt="Fissure in Sandstone">
                        </a>
                    </div>


{{--                    <div style="position: relative;visibility:visible"  class="col-6 mb-3 text-end">--}}
{{--                        <a href="/agence/{{ strtolower($agence->libelle) }}/reclamation" @if($agence->has_reclame === 0) class="tablinks disabled" @endif>--}}
{{--                            <img src="@if($param->recla_logo !== null) {{asset('/settings/'. $param->recla_logo )}} @else {{url('public/assets/backend/dist/img/Dame-2-sans-texte.jpg')}} @endif" style="width:70%" class="img-fluid" alt="Fissure in Sandstone">--}}
{{--                            <span class="card-sbtitle light-blue">{{ $param->recla_stitre ?? 'Je fais une réclamation' }} </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}


                    <div style="position: relative;visibility:visible" class="col-3 mb-2 text-start rounded">
                        <a href="/avis" @if($agence->has_avis === 0) class="tablinks disabled" @endif>
                            <img src="{{url('public/assets/frontend/files/6.png') }}" class="img-fluid rounded" alt="Fissure in Sandstone">
{{--                            <span class="card-sbtitle light-brown">{{ $param->avis_stitre ?? 'Je donne mon avis sur ma banque' }}</span>--}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{url('public/assets/frontend/js/zoom.js')}}"></script>
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    let agence = @json($agence)

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    window.addEventListener('load', function () {
        let value  = urlParams.get('click')
        if(!value){
            const dt = document.getElementById('first')
            dt.style.display = "block"
        }
    });

    // A $( document ).ready() block.
    jQuery( document ).ready(function() {

        const INACTIVITY_TIME = agence.delais * 1000; // 10 secondes
        let inactivityTimer;
        let swalInstance = null;
        let shouldRedirect = true;

        let value  = urlParams.get('click')

        if(value === 'yes'){
            document.getElementById('loader').style.display = 'flex';
            jQuery("#first").hide()

            const bgImage = new Image();
            bgImage.src = "/public/assets/frontend/files/fond_one.jpeg"; // Remplacez par le chemin de votre image

            // Ajoutez un écouteur pour vérifier si l'image est bien chargée
            bgImage.onload = function () {
                // Applique l'image de fond à la div
                const content = document.getElementById("bg-home");
                content.style.backgroundImage = `url('${bgImage.src}')`;
                content.style.backgroundSize = "cover";
                content.style.backgroundPosition = "center";
                content.style.opacity = "0.5";
                content.style.backgroundRepeat = "no-repeat";

                document.getElementById('loader').style.display = 'none';
                jQuery('#avis').removeClass('d-none')
                content.style.opacity = 1;
            };

            const url = new URL(window.location);
            url.search = ""; // Supprime tous les paramètres
            window.history.replaceState({}, document.title, url);

            resetInactivityTimer();
        }

        jQuery(".startHome").click(function (event) {
            event.preventDefault();
            jQuery("#first").hide()

            document.getElementById('loader').style.display = 'flex';

            const bgImage = new Image();
            bgImage.src = "/public/assets/frontend/files/fond_one.jpeg"; // Remplacez par le chemin de votre image

            // Ajoutez un écouteur pour vérifier si l'image est bien chargée
            bgImage.onload = function () {
                // Applique l'image de fond à la div
                const content = document.getElementById("bg-home");
                content.style.backgroundImage = `url('${bgImage.src}')`;
                content.style.backgroundSize = "cover";
                content.style.backgroundPosition = "center";
                content.style.backgroundRepeat = "no-repeat";

                document.getElementById('loader').style.display = 'none';
                jQuery('#avis').removeClass('d-none')
                content.style.opacity = 1;
            };


            resetInactivityTimer();
        })


        function warnAndRedirect() {
            let timerInterval;

            shouldRedirect = true;

            swalInstance  =  Swal.fire({
                title: "Inactivité détectée",
                html: "Vous serez redirigé dans <b></b> secondes...",
                icon: "warning",
                timer: 3000,
                showConfirmButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                    const timer = Swal.getPopup().querySelector("b");
                    timerInterval = setInterval(() => {
                        timer.textContent = `${Swal.getTimerLeft()}`;
                    }, 100);
                },
                willClose: () => {
                    if (shouldRedirect){
                        clearInterval(timerInterval);
                        // window.location.href = "https://votre-page-de-redirection.com";
                        jQuery("#first").show()
                        jQuery('#avis').addClass('d-none')


                        window.removeEventListener("mousemove", resetInactivityTimer);
                        window.removeEventListener("click", resetInactivityTimer);
                        window.removeEventListener("keydown", resetInactivityTimer);
                        window.removeEventListener("touchstart", resetInactivityTimer);

                        clearTimeout(inactivityTimer);
                    }
                }
            })
        }

        function resetInactivityTimer() {
            // Efface le timer existant s'il y en a un
            clearTimeout(inactivityTimer);

            // Ferme l'alerte SweetAlert si elle est ouverte
            if (swalInstance && Swal.isVisible()) {
                shouldRedirect = false;
                swalInstance.close();
            }

            // Redémarre le timer
            inactivityTimer = setTimeout(warnAndRedirect, INACTIVITY_TIME);

            window.addEventListener("mousemove", resetInactivityTimer);
            window.addEventListener("click", resetInactivityTimer);
            window.addEventListener("keydown", resetInactivityTimer);
            window.addEventListener("touchstart", resetInactivityTimer);
        }

    });
</script>
</body>

