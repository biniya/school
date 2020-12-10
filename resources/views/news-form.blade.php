@extends('layouts.app')
@section('content')

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Add News
                </h1>
            </div>
        </div>
    </section>
    <div class="container card" style="margin:50px;padding: 30px">
        <form method="POST" action="/news-register">
            {{ csrf_field() }}



            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input class="input" type="text" name="title" placeholder="Title">
                </div>
            </div>


            <div class="field">
                <label class="label">Subtitle</label>
                <div class="control">
                    <input class="input" type="text" name="subTitle" placeholder="Subtitle">
                </div>
            </div>

            <div class="field">
                <label class="label">Description</label>
                <div class="control">
                    <input class="textarea" type="text" name="description" placeholder="Description">
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
