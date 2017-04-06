@extends('layouts.admin')

@section('content')

    <h1>Create Users</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}

    <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label>Role:</label>
        {!! Form::select('role_id',[''=>'Choose Options'] + $roles ,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active',array(''=>'Select Status',1 => 'Active',0 => 'Not Active'),null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        <label>File:</label>
        <input type="file" name="photo_id" class="form-control">
    </div>

    <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" class="form-control">
    </div>


    <div class="form-group">
        <input type="submit" value="Create Post" class="btn btn-primary">
    </div>

    {!! Form::close() !!}


    @include('includes/form_error')



@stop