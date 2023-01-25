@extends('layout')

@section('content')
<h1>Search User</h1>
    
<div style="padding: 20px;margin: 10px;">
    <p>Enter Username</p>

    <p style="color:{{ session('suc') == 1 ? 'green' : 'red' }}">{!! session('msg') !!}</p>
    <form action="{{ url('/') }}/account/search" method="post">

        <div class="form-group">
            <label for="password">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
        {{ csrf_field() }}

        <button type="submit" class="btn btn-primary" style="padding: 4px;margin: 4px;margin-left: 0;font-size: 13px;">Submit</button>
    </form>
    
    @if(isset(session('userInfo')->memb___id))
    <p>Username: {{ session('userInfo')->memb___id }} </p>
    <p>Password: {{ session('userInfo')->memb__pwd }} </p>
    <p>Email: {{ session('userInfo')->mail_addr }} </p>
    @endif
</div>



@stop