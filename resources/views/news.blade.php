@extends('layouts.app')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <div class="level">
                <div class="level-left">
                    <a class="button is-primary" href="/news-form">Add News</a>
                </div>
                <h5 class="has-text-weight-bold level is-size-3">
                    News List
                </h5>

            </div>
        </div>
    </section>

    <div class="container" style="padding: 10px">
        <div class="columns is-centered">
            <table class="table is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>SubTitle</th>
                    <th>Description</th>
                </tr>
                </thead>
                @if(count($news)>0)
                    @foreach($news as $new)
                        <tbody>
                        <td>{{$new->title}}</td>
                        <td>{{$new->subtitle}}</td>
                        <td>{{$new->description}}</td>
                        </tbody>
                    @endforeach

                @else
                    <h3 class="is-vcentered">No News</h3>
                @endif
            </table>
        </div>
    </div>

@endsection
