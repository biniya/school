@extends('layouts.app')
@section('content')
    <section>
        <div class="columns is-centered">
            <div class="card" style="width: 800px;margin-top:40px;">
                <div class="card-content">
                    <form method="POST" action="{{route('class.store',$school->id)}}">
                        @csrf
                        <div class="title is-2">Add Class for {{$school->name}} </div>
                        <div class="field">
                            <label class="label">Grade: </label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="text" placeholder="Insert Grade" name="grade">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Capacity</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="text" placeholder="Insert Capacity" name="capacity">
                                <input  name="school_id" value="{{$school->id}}" hidden>

                            </div>
                        </div>
                        <div class="field" style="padding-bottom: 40px;padding-top:20px;">
                            <div class="control">
                                <button type="submit" class="button is-primary is-pulled-right">Submit</button>
                            </div>
                        </div>
                        @if($success != "")
                        <div class="notification is-primary is-light">
                              {{$success}}
                        </div>
                            @endif

                    </form>
                </div>
            </div>
        </div>

        <div class="container card" style="padding: 10px;margin:40px;">
            <div class="title is-2" style="margin-left:70px">Classes for {{$school->name}} </div>
            <div class="columns is-centered card-content">
                <table class="table is-striped is-narrow is-hoverable is-fullwidth">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Grade</th>
                        <th>Capacity</th>
                        <th>Reserved</th>
                    </tr>
                    </thead>
                    @if(count($classes)>0)
                        @foreach($classes as $class)
                            <tbody>
                            <td>{{$class->id}}</td>
                            <td>{{$class->grade}}</td>
                            <td>{{$class->capacity}}</td>
                            <td>{{$class->reserved}}</td>
                            </tbody>
                        @endforeach
                    @else
                        <h3 class="is-desktop is-vcentered">No Classes</h3>
                    @endif
                </table>
            </div>
        </div>
    </section>
@endsection
