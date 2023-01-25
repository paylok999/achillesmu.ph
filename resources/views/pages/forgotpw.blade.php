@extends('layout')

@section('content')
<h1>Forgot Password</h1>
    
<div style="padding: 20px;margin: 10px;">
    <p>If you forgot your password, please enter your email below, if the email you enter match our database, we will email your new password</p>

    <p style="color:{{ session('suc') == 1 ? 'green' : 'red' }}">{!! session('msg') !!}</p>
    <form action="{{ url('/') }}/forgot-password" method="post">

        <div class="form-group">
            <label for="password">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Type your email">
        </div>
        {{ csrf_field() }}

        <button type="submit" class="btn btn-primary" style="padding: 4px;margin: 4px;margin-left: 0;font-size: 13px;">Submit</button>
    </form>
</div>


@stop