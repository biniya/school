@extends('layouts.school')
@section('school-content')
    <div class="field">
        <label class="label">School Name</label>
        <div class="control">
            <input class="input" type="text" placeholder="School Name">
        </div>
    </div>


    <div class="field">
        <label class="label">Subject</label>
        <div class="control">
            <div class="select">
                <select>
                    <option>Select dropdown</option>
                    <option>With options</option>
                </select>
            </div>
        </div>
    </div>


    <div class="field">
        <label class="label">Kind of School</label>
        <div class="control">
            <div class="select">
                <select>
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
                <select>
                    <option>Explicit (stated curriculum)</option>
                    <option>Hidden (unofficial curriculum)</option>
                    <option>Absent or null ( excluded curriculum)</option>
                </select>
            </div>
        </div>
    </div>



    <div class="field">
        <label class="label">Subject</label>
        <div class="control">
            <div class="select">
                <select>
                    <option>Select dropdown</option>
                    <option>With options</option>
                </select>
            </div>
        </div>
    </div>

    <div class="field">
        <label class="label">Describe the School infrastructure</label>
        <div class="control">
            <textarea class="textarea" placeholder="Description"></textarea>
        </div>
    </div>

{{--    <div class="field">--}}
{{--        <div class="control">--}}
{{--            <label class="checkbox">--}}
{{--                <input type="checkbox">--}}
{{--                I agree to the <a href="#">terms and conditions</a>--}}
{{--            </label>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="field">--}}
{{--        <div class="control">--}}
{{--            <label class="radio">--}}
{{--                <input type="radio" name="question">--}}
{{--                Yes--}}
{{--            </label>--}}
{{--            <label class="radio">--}}
{{--                <input type="radio" name="question">--}}
{{--                No--}}
{{--            </label>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Submit</button>
        </div>
        <div class="control">
            <button class="button is-link is-light">Cancel</button>
        </div>
    </div>



@endsection
