@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="columns">
            <aside class="column is-2">
                <nav class="menu">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
{{--                        <li><a class="" href="{{route('')}}">Profile</a></li>--}}
{{--                        <li><a class="" href="{{route('')}}">Settings</a></li>--}}
                        <li><a class="" href="{{route('user')}}">Profile</a></li>
                        <li><a class="" href="{{route('user-settings')}}">Settings</a></li>
                    </ul>
                </nav>
            </aside>

            <main class="column">

                <section class="hero is-primary">
                    <div class="hero-body">
                        <div class="level">
                            <h1 class="title level-left">
                                Welcome
{{--                                {{$user_type->name}}--}}
                            </h1>
                                <div class="level-right">
                                    <a class="button is-primary" href="#">Notifcations</a>
                                </div>
                        </div>
                    </div>
                </section>

               <div class="container" style="margin:0px;padding: 30px"> <section>
                    <div class="container">
{{--                        <div class="notification is-primary">--}}
{{--                            <strong> Find a great school for your child.</strong>--}}
{{--                        </div>--}}
                        <div class="tile is-ancestor">
                            <div class="tile is-vertical is-8">
                                <div class="tile">
                                    <div class="tile is-parent is-vertical">
                                        <article class="tile is-child notification is-family-secondary">
                                            <p class="subtitle has-text-weight-bold">Find the best International School in Addis Ababa, Ethiopia</p>
                                            <p class="is-small">All the key info about every
                                                International School in Addis Ababa:
                                                their extracurricular activies,
                                                if teachers are native, class sizes, fees,
                                                school bus availability, etc.
                                            </p>
                                        </article>
                                        <article class="tile is-child notification is-family-secondary">
                                            <p class="subtitle has-text-weight-bold">Insights on College Success</p>
                                            <p class="is-small">Nonselective high schools that help underserved students
                                                enroll and persist in college.</p>
                                            <a class="button is-link modal-button">Learn more</a>
                                        </article>
                                    </div>
                                    <div class="tile is-parent">
                                        <article class="tile is-child notification is-family-secondary">
                                            <p class="subtitle has-text-weight-bold">Building tools that spotlight success and build the school-home connection</p>
                                            <figure class="image is-4by3">
                                                <img src="/images/students.jpg">
                                            </figure>
                                            <a class="button is-link modal-button">Learn more</a>
                                        </article>
                                    </div>
                                </div>
                                <div class="tile is-parent">
                                    <article class="tile is-child notification is-family-secondary">
                                        <p class="subtitle has-text-weight-bold">Wide tile</p>
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
                                        <p class="subtitle has-text-weight-bold">We help millions of parents get a great education for their child.</p>
                                        <p class="is-small">Each year we reach more than half of all parents in the Ethiopia.
                                            with school-age children. Whether it's helping parents find the right school,
                                            advocate for better schools, or support their children's learning,
                                            we work to empower parents with the information they need to improve educational
                                            opportunities–in their homes and their communities.
                                            <a class="button is-link modal-button">Learn more</a>
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
                                    <p class="subtitle has-text-centered-desktop has-text-weight-bold">Highlights of our latest work</p>
                                    <article class="tile is-child notification is-family-secondary">
                                        <p class="is-small">
                                            We believe that a happy child is a successful one. We are committed to providing a positive
                                            environment for you to choose your a best school for your child.
                                            We intend that all children should enjoy their learning, achieve their potential
                                            and become independent life-long learners.
                                        </p>
                                        <figure class="image is-2by1">
                                            <img src="/images/fandc.jpg">
                                        </figure>
                                        <a class="button is-link modal-button">Learn more</a>
                                    </article>
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
                                <p class="subtitle has-text-weight-bold">Empowering parents</p>
                                <br>
                                School Finder is the leading national
                                nonprofit empowering parents to unlock
                                educational opportunities for their children.
                                We provide school information and parenting resources
                                to help millions of Etiopian families choose the right school,
                                support learning at home, and guide their children to great futures.
                            </div>
                            <div class="column">
                                <p class="subtitle has-text-weight-bold">Join us</p>
                                <a>Supporters</a><br>
                                <a>Licensing</a><br>
                                <a>Sponsorship</a><br>
                                <a>Advertising</a><br>
                                <a>Careers</a>
                            </div>
                            <div class="column">
                                <p class="subtitle has-text-weight-bold">Learn more</p>
                                <a>Newsletter</a><br>
                                <a>Privacy policy</a><br>
                                <a>Terms of use</a><br>
                                <a>About us</a><br>
                                <a>Contact us</a>
                            </div>
                            <div class="column">
                                <p class="subtitle has-text-weight-bold">Connect</p>
                                <a href="www.facebook.com">Facebook</a><br>
                                <a href="www.twitter.com">Twitter</a><br>
                                <a href="www.youtube.com">YouTube</a><br>
                                <a href="www.telegram.org">Telegram</a><br>
                                <a href="www.instagram.com">Instagram</a>

                            </div>
                        </div>
                    </div>
                </section>
               </div>

            </main>
        </div>
    </div>

@endsection
