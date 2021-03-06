@extends('app')

@section('htmlheader_title')
Home
@endsection


@section('main-content')
{!! Form::open(array('route' => ['user.update', $user->id], 'method' => 'PUT')) !!}
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Cập nhật thông tin người dùng</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="form-group">
            {!! Form::label('username', 'Username:', ['class' => 'control-label']) !!}
            {!! Form::text('username', $user->username, ['class' => 'form-control', 'placeholder' => 'Enter username']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
            {!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Enter email']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone', 'Phone:', ['class' => 'control-label']) !!}
            {!! Form::text('phone', $user->phone, ['class' => 'form-control', 'placeholder' => 'Enter phone']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('blockchain', 'Blockchain:', ['class' => 'control-label']) !!}
            {!! Form::text('blockchain', $user->blockchain, ['class' => 'form-control', 'placeholder' => 'Enter blockchain']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('role_user', 'Role:', ['class' => 'control-label']) !!}
                    {!! Form::select('role_user', ['' => 'Please Select'] + $roles, $user->roles()->first() != null?$user->roles()->first()->id:NULL, ['class' => 'form-control select2', 'placeholder' => 'Enter sponsor_id'])  !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('sponsor_id', 'Người bảo trợ:', ['class' => 'control-label']) !!}
                    {!! Form::select('sponsor_id', ['' => 'Please Select'] + $users, $user->sponsor_id, ['class' => 'form-control select2', 'placeholder' => 'Enter sponsor_id'])  !!}
                </div>

            </div>
        </div>
    </div><!-- /.box-body -->

    <div class="box-header with-border">
        <h3 class="box-title">Thông tin khác</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('amount_wallet', 'Amount income wallet:', ['class' => 'control-label']) !!}
                    {!! Form::text('amount_wallet', $user->amount_wallet, ['class' => 'form-control', 'placeholder' => 'Enter target value']) !!}
                </div>
            </div>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        {!! Form::submit('Cập nhật',['class' => 'btn btn-primary']) !!}
    </div>
</div>

{!! Form::close() !!}
@endsection

@section('inpage-script')
<script>
    $(function () {
        $(".datepicker").datepicker({
            format: 'dd/mm/yyyy',
        });
    });
</script>
@endsection