@extends('main')

@section('title1' , '| Contact')

@section('frontend')
            <div class="content">
                <div class="title m-b-md">
                    Contact Me
                </div>
                <div class="form">
                    <form action="" id="form1">
                    <input type="text" id="fname" name="fname" placeholder="Name"><br>
                    <input type="text" id="femail" name="femail" placeholder="Email address"><br>
                    <input type="text" id="fcontent" name="fcontent" placeholder="Type your message here..."><br>
                    <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
@endsection

@section('scripts')