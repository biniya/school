@extends('layouts.app')
@section('content')

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Register School
                </h1>
            </div>
        </div>
    </section>
    <div class="container card" style="margin:50px;padding: 30px">
    <form method="POST" action="/school">
        {{ csrf_field() }}
    <div class="field is-horizontal is-pulled-left">
        <div class="field-label is-normal">
            <label class="label">School Info</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input" type="text" placeholder="Name" name="name">
                    <span class="icon is-small is-left">
          <i class="fas fa-user"></i>
        </span>
                </p>
            </div>
            <div class="field">
                <p class="control is-expanded has-icons-left has-icons-right">
                    <input class="input is-success" name="email" type="email" placeholder="Email"   >
                    <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
        </span>
                    <span class="icon is-small is-right">
          <i class="fas fa-check"></i>
        </span>
                </p>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label"></div>
        <div class="field-body">
            <div class="field is-expanded">
                <div class="field has-addons">
                    <p class="control">
                        <a class="button is-static">
                            +251
                        </a>
                    </p>
                    <p class="control is-expanded">
                        <input class="input" name="phone" type="tel" placeholder="Your phone number">
                    </p>
                </div>
                <p class="help">Do not enter the first zero</p>
            </div>
        </div>
    </div>

    <div class="field">
        <label class="label">Address</label>
        <div class="control">
            <input class="input" type="text" name="address" placeholder="Address">
        </div>
    </div>

    <div class="field">
        <label class="label">Type</label>
        <div class="control">
            <div class="select">
                <select name="type">
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
                <select name="kind_of_school">
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
                <select name="curriculum">
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
                <select name="status">
                    <option>Open</option>
                    <option>Closed</option>
                </select>
            </div>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Submit</button>
        </div>
    </div>

    </form>

    </div>

@endsection
