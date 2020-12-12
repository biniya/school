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
                        <li><a class="" href="{{route('user')}}">Profile</a></li>
                        <li><a class="" href="{{route('user-settings')}}">Settings</a></li>
                    </ul>
                </nav>
            </aside>

            <main class="column">
                <div class="container">
                    <section class="hero is-black is-small">
                        <div class="hero-body">
                            <div class="container ">
                                <p class="title">
                                    Settings
                                </p>
                                {{--                    <p class="subtitle">--}}
                                {{--                        --}}
                                {{--                    </p>--}}
                            </div>
                        </div>
                    </section>
                    <div class="card " style="padding: 30px">
                        <section class="container ">
                            <div class="columns features is-desktop is-vcentered">
                                {{--                Change Password Column--}}
                                <div class="column is-4">
                                    <div class="card is-shady" style="height: 415px">

                                        <div class="card-content">
                                            <form method="POST" action="{{route("change-password")}}">
                                                @csrf
                                                <div class="content">
                                                    <h4>Change Your Password</h4>
                                                    <input class="input" id="email" type="password" placeholder="Old Password" name="current_password"><br><br>
                                                    <input class="input" id="email" type="password" placeholder="New Password"><br><br>
                                                    <input class="input" id="email" type="password" placeholder="Confirm Password" name="new_password" >
                                                </div>
                                                <button class="button is-link is-pulled-right" type="submit">Change Password</button>
                                            </form>
                                            <div class="control" style="padding-top: 10px;">
                                                @if($passwordsuccess != "")
                                                    <div class="notification is-primary is-light">
                                                        {{$passwordsuccess}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{--                Invitation Card--}}
                                <div class="column is-4 is-desktop is-vcentered">
                                    <div class="card is-shady" style="height: 200px">
                                        <div class="card-content ">
                                            <div class="content">
                                                <h4>Invite</h4>
                                                <div class="field-body">
                                                    <div class="field is-expanded">
                                                        <div class="field has-addons">
                                                            <div class="field-label">
                                                                <label class="label">E-mail Address</label>
                                                            </div>
                                                            <p class="control is-expanded">
                                                                <input class="input" id="email" type="email" name="email" >
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <span class="button is-link modal-button is-pulled-right">Invite</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--                Contact Admin Column--}}
                                <div class="column is-4 modal-button" data-target="modal-image">
                                    <div class="card is-shady" style="height:400px;">
                                        <div class="card-content">
                                            <form method="POST"  action="{{route('class.update',1)}}">
                                                @csrf
                                                @method('PATCH')
                                                <div class="content">
                                                    <h4>Reserve class</h4>

                                                    <div class="field">
                                                        <label class="label">Select School</label>
                                                        <div class="control">
                                                            <div class="select">
                                                                <select style="width:250px;" name="school">
                                                                    @foreach($schools as $school)
                                                                        <option value="{{$school->id}}">{{$school->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="field">
                                                        <label class="label">Enter Class</label>
                                                        <div class="control">
                                                            <input class="input" type="text" placeholder="Enter Class" name="class">
                                                        </div>
                                                    </div>
                                                    <button class="button is-link is-pulled-right">Reserve</button>
                                                    <div class="control" style="margin-top: 50px;">
                                                        @if($success != "")
                                                            <div class="notification is-primary is-light">
                                                                {{$success}}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="columns features">
                                <div class="column modal-button" data-target="modal-card">
                                    <div class="card is-shady" style="height: 100%">
                                        <div class="card-content">
                                            <div class="content">
                                                <h4 class="has-text-weight-bold">Finishing up filling your profile</h4>
                                                <div class="field is-horizontal">
                                                    <div class="field-label">
                                                        <label class="label">Name</label>
                                                    </div>

                                                    <div class="field-body">
                                                        <div class="field">
                                                            <p class="control">
                                                                <input class="input"  name="name" value=""
                                                                       required autofocus>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="field is-horizontal">
                                                    <div class="field-label">
                                                        <label class="label">E-mail Address</label>
                                                    </div>

                                                    <div class="field-body">
                                                        <div class="field">
                                                            <p class="control">
                                                                <input class="input" id="email" type="email" name="email" value="">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="field is-horizontal">
                                                    <div class="field-label">
                                                        <label class="label">Phone number</label>
                                                    </div>
                                                    <div class="field-body">
                                                        <div class="field is-expanded">
                                                            <div class="field has-addons">
                                                                <p class="control">
                                                                    <a class="button is-static">
                                                                        +251
                                                                    </a>
                                                                </p>
                                                                <p class="control is-expanded">
                                                                    <input class="input" name="phone" value="" type="tel" placeholder="Your phone number">
                                                                </p>
                                                            </div>
                                                            <p class="help">Do not enter the first zero</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="field is-horizontal">
                                                    <div class="field-label">
                                                        <label class="label">Address</label>
                                                    </div>

                                                    <div class="field-body">
                                                        <div class="field">
                                                            <p class="control">
                                                                <input class="input" id="address" type="text" name="email" placeholder="Address" value="">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <span class="button is-link modal-button">Submit</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
