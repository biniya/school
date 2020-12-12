@extends('layouts.school')
@section('school-content')

    <div class="container">
        <section class="hero is-black">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Settings
                    </h1>
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
                                    <span class="button is-link modal-button">Change Password</span>
                                    <br>
                                    <br>

                                </div>
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
            </section>

        </div>

@endsection
