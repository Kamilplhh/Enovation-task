@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __('You are logged in!') }}

                    @if((Auth::user()->id) == 1)
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">UserID</th>
                                <th scope="col">User</th>
                                <th scope="col">Course</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach($objects as $object)
                        @foreach($object as $data)
                            <tr>
                                <th scope="row">{{ $data->user->id }}</th>
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->name }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection