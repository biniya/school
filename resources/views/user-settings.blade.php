@extends('layouts.school')
@section('school-content')

    <div class="container">
        <section class="hero is-primary is-small">
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
        <div class="container card " style="margin:0px;padding: 30px">
        <section class="container">
            <div class="columns features">
                <div class="column is-4">
                    <div class="card is-shady" style="height: 100%">
                        <div class="card-content">
                            <div class="content">
                                <h4>Invite</h4>
                                <p>Invite others </p>


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
                                <br>
                                <span class="button is-link modal-button">Invite</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card is-shady" style="height: 100%">

                        <div class="card-content">
                            <div class="content">
                                <h4>Password</h4>
                                <p>Protect your account, manage your password.</p>
                            </div>
                            <span class="button is-link modal-button " >Change Password</span>
                        </div>

                    </div>

                </div>
                <div class="column is-4 modal-button" data-target="modal-image">
                    <div class="card is-shady" style="height: 100%">
                        <div class="card-content">
                            <div class="content">
                                <h4>Contact Admin</h4>
                                <p>Here you can contact the admin to request anything </p>
                                <div class="field">
                                    <div class="control">
                                        <textarea class="textarea is-primary" placeholder="Textarea"></textarea>
                                    </div>
                                </div>
                                <span class="button is-link modal-button">Request</span>
                            </div>
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

@endsection
