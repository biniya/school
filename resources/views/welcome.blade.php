@extends('layouts.app')
@section('content')
    <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel {{ app()->version() }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Roboto', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .versioninfo {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
        }

        .framwork_title {
            font-weight: 600;
            padding-top: 20px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<section>
    <div class="container">
        <div class="notification is-primary">
            <strong> Find a great school for your child.</strong>
        </div>
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-8">
                <div class="tile">
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child notification is-family-secondary">
                            <p class="subtitle">Best Schools....</p>
                            <p class="is-small">Aligned with the right tile
                                Aligned with the right tile
                                Aligned with the right tile
                                Aligned with the right tile
                                Aligned with the right tile
                                Aligned with the right tile
                                Aligned with the right tile
                            </p>
                        </article>
                        <article class="tile is-child notification is-family-secondary">
                            <p class="subtitle">...tiles</p>
                            <p class="is-small">Aligned with the right tile
                                Aligned with the right tile
                                Aligned with the right tile
                                Aligned with the right tile</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-family-secondary">
                            <p class="subtitle">Middle tile</p>
                            <p class="is-small">With an image</p>
                            <figure class="image is-4by3">
                                <img src="/images/students.jpg">
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-family-secondary">
                        <p class="subtitle">Wide tile</p>
                        <p class="is-small">Aligned with the right tile
                            Aligned with the right tile
                            Aligned with the right tile
                            Aligned with the right tile</p>
                        <div class="content">
                            <!-- Content -->
                        </div>
                    </article>
                </div>
            </div>
            <div class="tile is-parent is-vertical">


                <div class="field has-addons">
                    <div class="control">
                        <input class="input" type="text" placeholder="Search">
                    </div>
                    <div class="control">
                        <a class="button is-info" href="{{ route('search')}}">
                            Search
                        </a>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-family-secondary">
                        <p class="subtitle">We help millions of parents get a great education for their child.</p>
                        <p class="is-small">Aligned with the right tile
                            Aligned with the right tile
                            Aligned with the right tile
                            Aligned with the right tile
                            Aligned with the right tile
                            Aligned with the right tile
                            Aligned with the right tile
                        </p>
                        <div class="content">
                            <!-- Content -->
                        </div>
                    </article>
                </div>


            </div>
        </div>
        <div class="tile is-ancestor">
            <article class="tile is-child notification is-grey-dark">
                <div class="content">
                    <p class="subtitle">Highlights of our latest work</p>
                    <p class="is-small">
                        Lorem ipsum dolor sit amet, ex has nemore detraxit, id etiam viris pro, ea dicta falli cotidieque his. Eos adhuc facilis id, mel assum incorrupte et. Est et nobis euripidis, quas idque est ut. Id oblique albucius nec, cum ubique aperiri at, ea aperiri dolorem vivendo pro.

                        Eu inimicus consetetur repudiandae mea. Eam cu ancillae adversarium. In usu ornatus gloriatur dissentiunt, an quaeque hendrerit vis. Mea ex justo eruditi. Ad pri tale movet definitionem.

                        Utinam fierent eu nec. Ut his omittam scribentur, ne vix mazim iracundia sadipscing. Verterem recteque maluisset per eu, detracto delicatissimi has ei, eu nec purto feugait assentior. Per id natum gubergren prodesset, principes imperdiet assueverit eos ex. Ei alia autem nominati mei. Per ut errem eleifend, sed no augue affert verear, nibh mandamus ei has.

                        Autem debitis gloriatur duo id, malorum ceteros his no. Accusata platonem delicatissimi ex nec, reque eripuit elaboraret id eum, te eos habeo pertinacia conclusionemque. Ad usu appareat indoctum efficiantur. Eu sea affert option, eum ex fugit antiopam accommodare.

                        Ius ne aeterno lucilius, ne iisque contentiones pro, has no quem oratio pertinax. Omnium minimum eligendi sea ad. Et sea quod virtute. Quis modo quaeque te duo.
                    </p>
                    <div class="content">
                        <!-- Content -->
                    </div>
                </div>
            </article>

        </div>
        <br>
        <br>
        <div class="columns " >
            <div class="column">
                <p class="subtitle">Empowering parents</p>
                <br>
                School Finder is the leading national
                nonprofit empowering parents to unlock
                educational opportunities for their children.
                We provide school information and parenting resources
                to help millions of Etiopian families choose the right school,
                support learning at home, and guide their children to great futures.
            </div>
            <div class="column">
                <p class="subtitle">Join us</p>
                <a>Supporters</a><br>
                <a>Licensing</a><br>
                <a>Sponsorship</a><br>
                <a>Advertising</a><br>
                <a>Careers</a>
            </div>
            <div class="column">
                <p class="subtitle">Learn more</p>
                <a>Newsletter</a><br>
                <a>Privacy policy</a><br>
                <a>Terms of use</a><br>
                <a>About us</a><br>
                <a>Contact us</a>
            </div>
            <div class="column">
                <p class="subtitle">Connect</p>
                <a href="www.facebook.com">Facebook</a><br>
                <a href="www.twitter.com">Twitter</a><br>
                <a href="www.youtube.com">YouTube</a><br>
                <a href="www.telegram.org">Telegram</a><br>
                <a href="www.instagram.com">Instagram</a>

            </div>
        </div>
    </div>
</section>
</body>
</html>
@endsection
