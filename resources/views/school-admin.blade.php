@extends('layouts.school')
@section('school-content')
    <div class="section">
        <div class="columns">
            <main class="column">
                <section class="hero is-primary">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">
                                {{$school->name}}
                            </h1>
                        </div>
                    </div>
                </section>

                <div class="container card" style="margin:0px;padding: 30px">

                    <div class="columns is-marginless is-centered">
                        <div class="column is-10">
                            <div class="card">
                                <header class="card-header ">
                                    <p class="card-header-title has-background-primary ">School Info</p>
                                </header>

                                <div class="card-content">
                                        <div class="field is-horizontal">
                                            <div class="field-label">
                                                <label disabled class="label">Phone number</label>
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
                                                            <input disabled class="input" name="phone" value="{{$school->phone}}" type="tel" placeholder="Your phone number">
                                                        </p>
                                                    </div>
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
                                                        <input disabled class="input" id="email" type="email" name="email" value="{{$school->email}}">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label class="label">Address</label>
                                            <div class="control">
                                                <input disabled class="input" type="text" name="address" value="{{$school->address}}" placeholder="Address">
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label class="label">Type</label>
                                            <div class="control">
                                                <div class="select">
                                                    <select disabled name="type" value="{{$school->type}}">
                                                        <option>Children's centre</option>
                                                        <option>Elementary</option>
                                                        <option>High school</option>
                                                        <option>All grades</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="field">
                                            <label class="label"  >Kind of School</label>
                                            <div class="control">
                                                <div class="select">
                                                    <select disabled name="kind_of_school" value="{{$school->kind_of_school}}">
                                                        <option>Public</option>
                                                        <option>Private</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="field">
                                            <label class="label">Curriculum </label>
                                            <div class="control">
                                                <div class="select">
                                                    <select disabled name="curriculum" value="{{$school->curriculum}}">
                                                        <option>Explicit (stated curriculum)</option>
                                                        <option>Hidden (unofficial curriculum)</option>
                                                        <option>Absent or null ( excluded curriculum)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="field">
                                            <label class="label" >Status</label>
                                            <div class="control">
                                                <div class="select">
                                                    <select disabled name="status" value="{{$school->status}}">
                                                        <option>Open</option>
                                                        <option>Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field is-horizontal">
                                            <div class="field-label"></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

@endsection
