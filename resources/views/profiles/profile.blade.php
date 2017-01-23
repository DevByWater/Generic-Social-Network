@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $user->name }}
                </div>
                <div class="panel-body">
                    <img src="{{ Storage::url($user->avatar) }}" height="100px" style="border-radius: 10%">
                </div>
            </div>
        </div>

    </div>
@endsection