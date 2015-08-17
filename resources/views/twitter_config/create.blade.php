@extends('app')

@section('content')
    <fieldset>
        @include('twitter_config/partials/_config_info')

        @include('twitter_config/partials/_errors')

        {!! Form::open(['route' => 'admin.twitter_config.store','class' => 'form-horizontal']) !!}
            @include('twitter_config/partials/_form')
        {!! Form::close() !!}
    </fieldset>
@endsection