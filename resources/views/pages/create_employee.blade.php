@extends('layouts.app')

@section('content')

    <div class="container mt-4 w-50 border ">
        <h1 class="text-center">Create new Employee</h1>


        @if($message = Session::get('success'))


        <div class="alert alert-success alert-block text-center">
                <strong>{{ $message }}</strong>
        </div>


        @endif

        {!! Form::open(['url' => ['store-employee'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('lname','Last Name') }}
                {{ Form::text('lname',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('fname','First Name') }}
                {{ Form::text('fname',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('position','Position') }}
                {{ Form::text('position',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('salary','Salary') }}
                {{ Form::text('salary',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group shadow-none">
                {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success']) !!}

            </div>
        {!! Form::close() !!}

    </div>

@endsection
