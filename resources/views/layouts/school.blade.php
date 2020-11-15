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
                        <li><a class="is-active" href="">Profile</a></li>
                    </ul>
                    <p class="menu-label is-active">
                        Course management
                    </p>
                    <ul class="menu-list">
                        <li><a>Interaction</a></li>
                        <li>
                            <a class="">Manage</a>

                        </li>
                        <li><a>Invitations</a></li>
                    </ul>
                </nav>
            </aside>

            <main class="column">
                <div>
                    @yield('school-content')
                </div>
            </main>
        </div>
    </div>


@endsection
