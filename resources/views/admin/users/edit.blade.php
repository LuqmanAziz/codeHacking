@extends('layouts.admin')

@section('content')

    <h1>Edit Users</h1>

    <div class="row">

        <div class="col-sm-3">

            <img src="{{url($user->photo ? $user->photo->file : 'http://placehold.it/400x400')}}" alt="" class="img-responsive img-rounded">

        </div>

        <div class="col-sm-9">

            {!! Form::model($user, ['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

            <div class="form-group">
                <label>Name:</label>
                {!! Form::text('name',null,['class'=>'form-control']) !!}
                {{--<input type="text" name="name" class="form-control">--}}
            </div>

            <div class="form-group">
                <label>Email:</label>
                {!! Form::text('email',null,['class'=>'form-control']) !!}
                {{--<input type="text" name="email" class="form-control">--}}
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
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                {{--<input type="file" name="photo_id" class="form-control">--}}
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control">
            </div>


            <div class="form-group">
                <input type="submit" value="Create Post" class="btn btn-primary col-sm-6">
            </div>

            {!! Form::close() !!}


            {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}


                <div class="form-group">
                    <input type="submit" value="Delete User" class="btn btn-danger col-sm-6">
                </div>

            {!! Form::close() !!}

        </div>

    </div>



    <div class="row">
        @include('includes/form_error')
    </div>






@stop