@extends('layouts.app')
@section('content')
    <section>
        <div class="title is-2"> {{$title}} </div>

        <div class="columns">
        @if($title === "News")
            @foreach($news as $new)
                <div class="card column" style="margin-right: 20px;">
                    <div class="card-content">
                        <p class=" title is-5">
                            {{$new->title}}
                        </p>
                        <p class="subtitle is-6" style="margin-top: 5px">
                       {{$new->subtitle}}
                         </p>
                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
        <div class="columns">
            @if($title === "Featured Schools")
                @foreach($schools as $school)
                    <div class="card column" style="margin-right: 20px;">
                        <div class="card-content">
                            <p class="title is-3 has-text-centered">
                                {{$school->name}}
                            </p>
                            <p class="subtitle is-6 has-text-centered" style="margin-top: 5px">
                                {{$school->address}} |
                                {{$school->kind_of_school}} | {{$school->status}}
                            </p>
                            <p class="has-text-centered">{{$school->email}} | {{$school->phone}}</p>
                        </div>

                        <footer class="card-footer">
                            <p class="card-footer-item">
      <span>
        See <a href="{{route("school-details",$school->id)}}">Details</a>
      </span>
                            </p>
                        </footer>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection
