
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre-Diagnostics</title>
    <!-- Font Awesome -->


    <!-- MDB -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public/assets/frontend/files/favicon.png')}}">

    <link href="{{url('public/assets/frontend/css/mdb.min.css')}}" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <style>

        .bg-home{
            background-image: url('{{url('public/assets/frontend/img/Fond-1.webp') }}');
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }
        #bg-other{
            {{--background-image: url('{{url('public/assets/frontend/img/fond2.webp') }}');--}}
            {{--background-position: center;--}}
            {{--background-size: cover;--}}
            {{--background-attachment: fixed;--}}
            height: 100vh !important;
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
            left: 185px !important;
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
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 100vh;
        }

        .carousel-item:nth-child(1) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(2) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(3) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

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
    <style type="text/css">

        .active{
            display: block;
        }
        /* Style the tab content */
        .tabcontent {
            display: none;

        }
        #avis{
            display: block;
        }


        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0,0,0,.125);
            border-radius: .5rem;
        }
        .card {
            border: 0;
            box-shadow: 0 10px 15px -3px rgba(0,0,0,.07),0 4px 6px -2px rgba(0,0,0,.05);
        }

        .card-bodye {
            flex: 1 1 auto;
            padding: 1.5rem;
        }

        .tab1 {
            display: none;
        }

        .step {
            opacity: 1 !important;
        }
        .step1{
            opacity: 1;
        }
        .step1.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step1.finish {
            background-color: #04AA6D;
        }



        .tab3 {
            display: none;
        }
        .step3{
            opacity: 1;
        }
        .step3.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step3.finish {
            background-color: #04AA6D;
        }




        @media only screen and (max-width:1920px) and (max-height:1280px) {
            .taille{
                font-size:35px;
            }


            #ckeckb{
                margin-top:-19px;
            }

        }
        @media only screen and (max-height:600px) {
            .taille{
                font-size:17px;
            }

            .taille2{
                font-size:17px;
            }
            #ckeckb{
                margin-top:0px;
            }
        }
    </style>


    <style type="text/css">


        .toast__containern {
            display: table-cell;
            vertical-align: middle;
            z-index: 100000000;


        }

        .toast__celln{
            display:inline-block;
        }

        .add-marginn{
            margin-top:20px;
        }

        .toast__svgn{
            fill:#fff;
        }

        .toastn {
            text-align:left;
            padding: 21px 0;
            background-color:#fff;
            border-radius:4px;
            max-width: 500px;
            top: 0px;
            position:relative;
            box-shadow: 1px 7px 14px -5px rgba(0,0,0,0.2);
        }


        .toastn:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            border-top-left-radius:4px;
            border-bottom-left-radius: 4px;

        }

        .toast__iconn{
            position:absolute;
            top:50%;
            left:22px;
            transform:translateY(-50%);
            width:14px;
            height:14px;
            padding: 7px;
            border-radius:50%;
            display:inline-block;
        }

        .toast__typen {
            color: #3e3e3e;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 8px;
        }

        .toast__messagen {
            font-size: 14px;
            margin-top: 0;
            margin-bottom: 0;
            color: #878787;
        }

        .toast__contentn{
            padding-left:70px;
            padding-right:60px;
        }

        .toast__closen {
            position: absolute;
            right: 22px;
            top: 50%;
            width: 14px;
            cursor:pointer;
            height: 14px;
            fill:#878787;
            transform: translateY(-50%);
        }

        .toast--green .toast__icon{
            background-color:#2BDE3F;
        }

        .toast--green:before{
            background-color:#2BDE3F;
        }

        .toast--blue .toast__icon{
            background-color:#1D72F3;
        }

        .toast--bluen:before{
            background-color:#1D72F3;
        }

        .toast--yellown .toast__iconn{
            background-color:#b2b88f
        }

        .toast--yellown:before{
            background-color:#b2b88f;
        }
        .iti{
            width: 100% !important;
        }
        .checkbox-grid-container {
            display: flex;
            justify-content: center; /* Centre horizontalement la grille */
            align-items: center;     /* Centre verticalement la grille */
        }

        .checkbox-grid {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Deux colonnes de taille égale */
            gap: 20px 20px; /* Espacement vertical et horizontal */
            width: 50%;
        }

        .checkbox-grid div {
            display: flex;
            align-items: center; /* Aligne verticalement les checkboxes et les labels */
        }

        .checkbox-grid input[type="checkbox"] {
            margin-right: 10px; /* Espacement entre la checkbox et le label */
        }
        .custom-radio-grid-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .custom-radio-grid {
            display: flex;
            gap: 20px 83px; /* Espace entre les boutons radio */
            justify-content: center; /* Centre les éléments */
        }

        .custom-radio {
            display: flex;
            align-items: center;
            flex-direction: column; /* Affichage vertical pour chaque option */
            text-align: center;
        }

        .custom-radio input[type="radio"] {
            display: none; /* Cache les boutons radio par défaut */
        }

        .custom-radio label {
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
        }

        .custom-radio img {
            width: 170px;
            height: 170px;
            margin-bottom: 5px; /* Espace sous l'image */
            display: none; /* Cache les images par défaut */
        }

        .custom-radio img.unchecked {
            display: block; /* Affiche l'image non cochée par défaut */
        }

        /* Change d'image lorsque la radio est cochée */
        .custom-radio input[type="radio"]:checked + label img.unchecked {
            display: none; /* Cache l'image non cochée */
        }

        .custom-radio input[type="radio"]:checked + label img.checked {
            display: block; /* Affiche l'image cochée */
        }

        .custom-radio span {
            margin-top: 5px;
            font-size: 20px; /* Taille du texte */
            color: #127161;
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
            border: 8px solid #177F95; /* Couleur du cercle externe */
            border-top: 8px solid #127161; /* Couleur de l'animation */
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

<div id="loader">
    <div class="spinner"></div>
</div>

<div id="faq" class="tabcontent" style="display: none;" >
    <div class="container-fluid">
        </div>
        <div class="position-relative overflow-hidden p-md-5 text-center d-flex flex-column gap-3 justify-content-center row bg-yother h-100" id="bg-other">
            <div style="position:relative" class="col-md-12 mb-2 text-center">
                <img src="{{url('public/assets/frontend/files/CentreDiagnostic_invert.png') }}" alt="" srcset="" height="100">
            </div>
            <div align="center" class="col-12" style="margin: 0 0 12px;">
                <a class="nav-link text-center" href="#" style="cursor: default; color: white;">
                    <h1 class="bienvenu">
                        JE DONNE MON AVIS
                    </h1>
                </a>
            </div>
            <div class="col-8 mx-auto my-3 text-center card  p-2 p-md-5">
                <form id="dynamicForm" action="" method="POST">
                    @csrf

                    @foreach($formFields as $index => $field)
                        <div class="step" id="step{{ $index+1 }}" style="display: {{ $index === 0 ? 'block' : 'none' }};">
                            <div align="center">
                                <label style="color: #177F95;font-weight: bold;font-size:25px" for="">{{ ucfirst($field->intitulé) }}</label>

                                <input type="hidden" name="field_id_{{ $field->id }}" value="{{ $field->id }}">
                            </div>
                            <div align="center" class="mb-3">

                                <img src="{{url('public/assets/frontend/img/Tarait.png')}}" class="mb-5 mt-3" width="250px" height="4px" style="margin-left: -50px;">
                            </div>
                            <div class="form-group">

                                @if($field->type == 'select')
                                    @if($field->name == "nationalite")
                                        @php
                                            // indiqué le chemin de votre fichier JSON, il peut s'agir d'une URL
                                            $str_json = file_get_contents("assets/backend/countries-FR.json");

                                            $parsed_json = json_decode($str_json,true);

                                        @endphp
                                    @endif
                                    <select name="{{ $field->name }}" class="form-control" style="border-color: #127161;height:50px" required>
                                        @foreach($parsed_json as $sv)
                                            @if($sv == 'Gabon')
                                                <option selected>{{ $sv }}</option>
                                            @else
                                                <option>{{ $sv }}</option>
                                            @endif
                                        @endforeach
                                        <!-- Ajouter les options ici -->
                                    </select>
                                @elseif($field->type === 'radio')
                                    <div class="checkbox-grid-container">
                                        <div class="checkbox-grid mx-auto">
                                            @foreach($field->options as $option)
                                                <div>
                                                    <input type="radio" name="{{ $field->name }}" class="form-check-input" value="{{ $option->libelle }}" id="{{ $option->libelle }}">
                                                    <label class="form-check-label" for="{{ $option->libelle }}">{{ $option->libelle }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif($field->type === 'checkbox')
                                    <div class="checkbox-grid-container">
                                        <div class="checkbox-grid mx-auto">
                                            @foreach($field->options as $option)
                                                <div>
                                                    <input type="checkbox" class="form-check-input" name="{{ $field->name }}[]" value="{{ $option->libelle }}" id="{{ $option->libelle }}">
                                                    <label class="form-check-label" for="{{ $option->libelle }}">{{ $option->libelle }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif($field->type === 'emoji')
                                    <div class="custom-radio-grid-container">
                                        <div class="custom-radio-grid">
                                            <div class="custom-radio">
                                                <input type="radio" id="radio_1" name="emoji" value="Decevant">
                                                <label for="radio_1">
                                                    <img src=" {{url('public/assets/frontend/img/decevant_off.png') }} " class="unchecked">
                                                    <img src=" {{url('public/assets/frontend/img/decevant_on.png') }} " class="checked">
                                                    <span>Decevant</span>
                                                </label>
                                            </div>
                                            <div class="custom-radio">
                                                <input type="radio" id="radio_2" name="emoji" value="Mediocre">
                                                <label for="radio_2">
                                                    <img src=" {{url('public/assets/frontend/img/mediocre_off.png') }} " class="unchecked">
                                                    <img src=" {{url('public/assets/frontend/img/mediocre_on.png') }} " class="checked">
                                                    <span>Mediocre</span>
                                                </label>
                                            </div>
                                            <div class="custom-radio">
                                                <input type="radio" id="radio_3" name="emoji" value="Bien">
                                                <label for="radio_3">
                                                    <img src=" {{url('public/assets/frontend/img/bien_off.png') }} " class="unchecked">
                                                    <img src=" {{url('public/assets/frontend/img/bien_on.png') }} " class="checked">
                                                    <span>Bien</span>
                                                </label>
                                            </div>
                                            <div class="custom-radio">
                                                <input type="radio" id="radio_4" name="emoji" value="Parfait">
                                                <label for="radio_4">
                                                    <img src=" {{url('public/assets/frontend/img/parfait_off.png') }} " class="unchecked">
                                                    <img src=" {{url('public/assets/frontend/img/parfait_on.png') }} " class="checked">
                                                    <span>Parfait</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($field->type === 'textarea')
                                    <textarea placeholder="Renseignez ce champ" name="avis" rows="5" class="form-control" style="border-color: #0F5095;margin-top: -20px"></textarea>
                                @elseif($field->type === 'tel')
                                    <input  type="tel" id="{{ $field->type }}"  name="{{ $field->name }}" class="form-control" style="border-color: #0F5095;height:50px; width: 100% !important" required>
                                @elseif($field->name === 'age')
                                    <input  type="number" id="{{ $field->type }}"  name="{{ $field->name }}" class="form-control" style="border-color: #0F5095;height:50px; width: 100% !important" required min="18" max="100">
                                @else
                                    <input type="{{ $field->type }}" name="{{ $field->name }}" class="form-control" class="form-control" required style="border-color: #0F5095;height:50px">
                                @endif
                            </div>

                            <div class="navigation-buttons mt-5">
                                @if($index > 0)
                                    <button type="button" class="btn btn-outline-secondary btn-rounded border-0 m-1 bienvenu btn-lg" style="width: 150px; color: white; background: #177F95;"  onclick="prevStep({{ $index+1 }})">Précédent</button>
                                @endif

                                @if($index < count($formFields) - 1)
                                    <button type="button" class="btn btn-outline-primary btn-rounded border-0 m-1 bienvenu btn-lg" style="width: 150px; color: white; background: #177F95;" onclick="nextStep({{ $index+1 }})">Suivant</button>
                                @else
                                    <button type="submit" class="btn btn-outline-success btn-rounded border-0 m-1 bienvenu btn-lg" style="width: 150px; color: white; background: #177F95;" >Soumettre</button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </form>

                <div id="successMessage" style="display:none;">

                    <div class="text-center text-light pt-3">
                        <h1 class="display-6 text-muted h1 bienvenu"><strong style="color: #105095; margin-bottom: 15px">Merci d’avoir répondu à notre questionnaire de satisfaction.</strong></h1>
                        <h1 class="display-6 text-muted h1 bienvenu"><strong style="color: #177F95;">À bientôt dans votre Superbe Clinique !</strong></h1>

                        <br>
                        <font style="color: #177F95;"><h2>Ce service vous a-t-il été utile ?</h2></font>
                        <table align="center" style="margin-top: 20px" width="300px"><tbody><tr><td>
                                    <svg id="oui_o" onclick="handleLike()" class="svg-inline--fa fa-thumbs-up" style="height: 30px;color: #177F95; margin-right: 45px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="thumbs-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M96 191.1H32c-17.67 0-32 14.33-32 31.1v223.1c0 17.67 14.33 31.1 32 31.1h64c17.67 0 32-14.33 32-31.1V223.1C128 206.3 113.7 191.1 96 191.1zM512 227c0-36.89-30.05-66.92-66.97-66.92h-99.86C354.7 135.1 360 113.5 360 100.8c0-33.8-26.2-68.78-70.06-68.78c-46.61 0-59.36 32.44-69.61 58.5c-31.66 80.5-60.33 66.39-60.33 93.47c0 12.84 10.36 23.99 24.02 23.99c5.256 0 10.55-1.721 14.97-5.26c76.76-61.37 57.97-122.7 90.95-122.7c16.08 0 22.06 12.75 22.06 20.79c0 7.404-7.594 39.55-25.55 71.59c-2.046 3.646-3.066 7.686-3.066 11.72c0 13.92 11.43 23.1 24 23.1h137.6C455.5 208.1 464 216.6 464 227c0 9.809-7.766 18.03-17.67 18.71c-12.66 .8593-22.36 11.4-22.36 23.94c0 15.47 11.39 15.95 11.39 28.91c0 25.37-35.03 12.34-35.03 42.15c0 11.22 6.392 13.03 6.392 22.25c0 22.66-29.77 13.76-29.77 40.64c0 4.515 1.11 5.961 1.11 9.456c0 10.45-8.516 18.95-18.97 18.95h-52.53c-25.62 0-51.02-8.466-71.5-23.81l-36.66-27.51c-4.315-3.245-9.37-4.811-14.38-4.811c-13.85 0-24.03 11.38-24.03 24.04c0 7.287 3.312 14.42 9.596 19.13l36.67 27.52C235 468.1 270.6 480 306.6 480h52.53c35.33 0 64.36-27.49 66.8-62.2c17.77-12.23 28.83-32.51 28.83-54.83c0-3.046-.2187-6.107-.6406-9.122c17.84-12.15 29.28-32.58 29.28-55.28c0-5.311-.6406-10.54-1.875-15.64C499.9 270.1 512 250.2 512 227z"></path></svg>

                                    <svg id="non_o" onclick="handleDislike()" class="svg-inline--fa fa-thumbs-down" style="height: 30px;color: #177F95;" aria-hidden="true" focusable="false" data-prefix="far" data-icon="thumbs-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M128 288V64.03c0-17.67-14.33-31.1-32-31.1H32c-17.67 0-32 14.33-32 31.1v223.1c0 17.67 14.33 31.1 32 31.1h64C113.7 320 128 305.7 128 288zM481.5 229.1c1.234-5.092 1.875-10.32 1.875-15.64c0-22.7-11.44-43.13-29.28-55.28c.4219-3.015 .6406-6.076 .6406-9.122c0-22.32-11.06-42.6-28.83-54.83c-2.438-34.71-31.47-62.2-66.8-62.2h-52.53c-35.94 0-71.55 11.87-100.3 33.41L169.6 92.93c-6.285 4.71-9.596 11.85-9.596 19.13c0 12.76 10.29 24.04 24.03 24.04c5.013 0 10.07-1.565 14.38-4.811l36.66-27.51c20.48-15.34 45.88-23.81 71.5-23.81h52.53c10.45 0 18.97 8.497 18.97 18.95c0 3.5-1.11 4.94-1.11 9.456c0 26.97 29.77 17.91 29.77 40.64c0 9.254-6.392 10.96-6.392 22.25c0 13.97 10.85 21.95 19.58 23.59c8.953 1.671 15.45 9.481 15.45 18.56c0 13.04-11.39 13.37-11.39 28.91c0 12.54 9.702 23.08 22.36 23.94C456.2 266.1 464 275.2 464 284.1c0 10.43-8.516 18.93-18.97 18.93H307.4c-12.44 0-24 10.02-24 23.1c0 4.038 1.02 8.078 3.066 11.72C304.4 371.7 312 403.8 312 411.2c0 8.044-5.984 20.79-22.06 20.79c-12.53 0-14.27-.9059-24.94-28.07c-24.75-62.91-61.74-99.9-80.98-99.9c-13.8 0-24.02 11.27-24.02 23.99c0 7.041 3.083 14.02 9.016 18.76C238.1 402 211.4 480 289.9 480C333.8 480 360 445 360 411.2c0-12.7-5.328-35.21-14.83-59.33h99.86C481.1 351.9 512 321.9 512 284.1C512 261.8 499.9 241 481.5 229.1z"></path></svg>
                                </td></tr></tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg fixed-bottom navbar-light">
        <div class="container-fluid">
            <!-- Toggle button -->
            <a class="navbar-brand mt-lg-0 tablinks" href="/accueil?click=yes">
                <span class="btn text-light" style="font-size:20px; background-color: #177F95; border-radius: 25px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 4px;">
                      <path d="M15 19L8 12L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Accueil
                </span>
            </a>
        </div>
        <!-- Container wrapper -->
    </nav>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="/assets/frontend/js/zoom.js"></script>
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // A $( document ).ready() block.
    let currentStep = 1;
    const url = window.location.href;
    const parsedUrl = new URL(url);
    const pathParts = parsedUrl.pathname.split('/');
    const agence = pathParts[2]; // Ici, '123'

    window.addEventListener('load', function () {
        const bgImage = new Image();
        bgImage.src = "/public/assets/backend/img/logo_fond_ecran.webp"; // Remplacez par le chemin de votre image

        // Ajoutez un écouteur pour vérifier si l'image est bien chargée
        bgImage.onload = function () {
            // Applique l'image de fond à la div
            const content = document.getElementById("bg-other");
            content.style.backgroundImage = `url('${bgImage.src}')`;
            content.style.backgroundSize = "cover";
            content.style.backgroundPosition = "center";
            content.style.backgroundRepeat = "no-repeat";
            content.style.height = "75vh !important";

            // Cache le loader et affiche le contenu une fois l'image chargée
            document.getElementById('loader').style.display = 'none';
            document.getElementById('faq').style.display = 'block';
            content.style.opacity = 1;
        };
    });

    const input = document.querySelector("#tel");
    const iti = window.intlTelInput(input, {
        initialCountry: "auto", // Détecte automatiquement le pays de l'utilisateur
        strictMode: true,
        geoIpLookup: callback => {
            fetch("https://ipapi.co/json")
                .then(res => res.json())
                .then(data => callback(data.country_code))
                .catch(() => callback("us"));
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // Inclut les scripts utilitaires pour le formatage
    });

    // Fonction pour passer à l'étape suivante
    function nextStep(currentStep) {
        // Sélectionner tous les champs de l'étape actuelle
        const step = document.getElementById('step' + currentStep);
        const inputs = step.querySelectorAll('input, select, textarea');

        let allValid = true;

        // Valider chaque champ
        inputs.forEach(input => {
            if (!input.checkValidity()) {
                input.reportValidity();  // Affiche le message d'erreur du navigateur
                allValid = false;
            }
        });

        // Si tous les champs sont valides, on passe à l'étape suivante
        if (allValid) {
            step.style.display = 'none';
            document.getElementById('step' + (currentStep + 1)).style.display = 'block';
        }
    }

    // Fonction pour revenir à l'étape précédente
    function prevStep(currentStep) {
        document.getElementById('step' + currentStep).style.display = 'none';
        document.getElementById('step' + (currentStep - 1)).style.display = 'block';
    }

    jQuery( document ).ready(function() {

        // Récupérer l'URL actuelle
        const url = window.location.href;
        const parsedUrl = new URL(url);
        const pathParts = parsedUrl.pathname.split('/');
        const agence = pathParts[2]; // Ici, '123'


        jQuery(".startHome").click(function (event) {
            event.preventDefault();
            jQuery("#first").hide()
            jQuery('#avis').removeClass('d-none')
            checkActivity();
        })

        // Soumission du formulaire via AJAX
        $("#dynamicForm").submit(function (event) {
            event.preventDefault(); // Empêche le rechargement de la page

            // Collecte des données du formulaire
            var formData = $(this).serialize();

            // Soumission AJAX
            $.ajax({
                type: 'POST',
                url: '/avis', // Remplace par l'URL de ton endpoint
                data: formData,
                success: function (response) {
                    if (response.status === 200) {
                        $('#dynamicForm').hide();
                        $('#successMessage').show();
                    }
                },
                error: function (xhr, status, error) {
                    // Gérer l'erreur ici
                    alert('Erreur lors de la soumission du formulaire: ' + error);
                    console.error(xhr);
                }
            });
        });
    })

    const INACTIVITY_TIME = 10000; // 10 secondes
    let inactivityTimer;
    let swalInstance = null;
    let shouldRedirect = true;


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
                    window.location.href = '/accueil?click=yes';

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

    function handleLike() {
        Swal.fire({
            title: 'Merci pour votre avis !',
            text: 'Vous avez aimé cette réponse.',
            icon: 'success',
            showCancelButton: true,
            confirmButtonText: 'Confirmer',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            if (result.isConfirmed) {
                // Changer la couleur du SVG de like
                document.getElementById(`oui_o`).style.color = '#b2b88f';
                document.getElementById(`non_o`).style.color = '#177F95'; // Reset dislike color if it was previously clicked
                // Appel AJAX pour enregistrer le like
                saveFeedback('like');
            }
        });
    }

    // Fonction pour gérer le Dislike
    function handleDislike() {
        Swal.fire({
            title: 'Merci pour votre avis !',
            text: 'Vous n\'avez pas aimé cette réponse.',
            icon: 'error',
            showCancelButton: true,
            confirmButtonText: 'Confirmer',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            if (result.isConfirmed) {
                // Changer la couleur du SVG de dislike
                document.getElementById(`non_o`).style.color = '#b2b88f';
                document.getElementById(`oui_o`).style.color = '#177F95'; // Reset like color if it was previously clicked
                // Appel AJAX pour enregistrer le dislike
                saveFeedback('dislike');
            }
        });
    }

    function saveFeedback(type) {


        var token = $('meta[name="csrf-token"]').attr('content');
        // Remplacez par un véritable appel AJAX ici
        $.ajax({
            url: '/save-feedback/' + agence + '/avis',
            method: 'POST',
            data: { feedback: type, "_token": token, },
            success: function(response) {
                if(response.status === 200) {
                    window.location.href = '/agence/' + agence + '?click=yes';
                }
            }
        });
    }

    resetInactivityTimer()
</script>
</body>
