@extends('layouts.app')
@section('content')
{{--    <section class="hero is-primary">--}}
{{--        <div class="hero-body">--}}
{{--            <div class="container">--}}
{{--                <h1 class="title">--}}
{{--                    Edit User--}}
{{--                </h1>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <div class="container">

        <div class="columns is-marginless is-centered">
            <div class="column is-5">
                <div class="card">
                    <header class="card-header ">
                        <p class="card-header-title has-background-primary ">Edit User</p>
                    </header>

                    <div class="card-content">
                        <form method="POST" action="{{route('school.update',$school->id)}}">
                            @csrf
                            @method('PATCH')
                            <div class="field is-horizontal">
                                <div class="field-label">
                                    <label class="label">Name</label>
                                </div>

                                <div class="field-body">
                                    <div class="field">
                                        <p class="control">
                                            <input class="input"  name="name" value="{{$school->name}}"
                                                   required autofocus>
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
                                                <input class="input" name="phone" value="{{$school->phone}}" type="tel" placeholder="Your phone number">
                                            </p>
                                        </div>
                                        <p class="help">Do not enter the first zero</p>
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
                                            <input class="input" id="email" type="email" name="email" value="{{$school->email}}">
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Address</label>
                                <div class="control">
                                    <input class="input" type="text" name="address" value="{{$school->address}}" placeholder="Address">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Type</label>
                                <div class="control">
                                    <div class="select">
                                        <select name="type" value="{{$school->type}}">
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
                                        <select name="kind_of_school" value="{{$school->kind_of_school}}">
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
                                        <select name="curriculum" value="{{$school->curriculum}}">
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
                                        <select name="status" value="{{$school->status}}">
                                            <option>Open</option>
                                            <option>Closed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="has-text-weight-bold">Deactivate School</label> <br>
                                <input  type="checkbox" name="active"
                                        class="switch is-rounded is-outlined" />
                                <label for="switchRoundedOutlinedDefault"></label>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label"></div>

                                <div class="field-body">
                                    <div class="field is-grouped">
                                        <div class="control">
                                            <button type="submit" class="button is-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
