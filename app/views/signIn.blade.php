@extends('layouts.main')

@section('items')

        <li>
        {{ Form::open(['route' => 'users.validate']) }}
        <div id="form">
            <ul>
                <li>
                    <div id="item">Sign In</div>
                </li>
                <li>
                    <div id="textareasOut">
                    <div id="textareasIn">
                        {{ Form::label('Username', 'Username: ') }}
                        {{ Form::input('text','Username') }}
                        <br>
                        {{ Form::label('Password', 'Password: ') }}
                        {{ Form::input('text','Password') }}
                        <br>
                        {{ Form::submit('Sign In') }}
                    </div>
                    </div>
                </li>
            </ul>
        </div>
        {{ Form::close() }}
        
        </li>
        
@stop