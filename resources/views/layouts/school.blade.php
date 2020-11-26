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
                        <li><a class="" href="/school">Profile</a></li>
                        <li><a class="" href="">School management</a></li>
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
