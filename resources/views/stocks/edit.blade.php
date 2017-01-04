@extends('layouts.app')
@section('content')
 <div class="container">
        <div class="row">
            <!-- <div class="col-md-8 col-md-offset-2"> -->
                <div class="panel panel-default">
                    <div class="panel-heading"> 
    <h1>Update Stock</h1>
    {!! Form::model($stock,['method' => 'PATCH','route'=>['stocks.update',$stock->id]]) !!}
       <div class="form-group">
        {!! Form::label('symbol', 'Symbol:') !!}
        {!! Form::text('symbol',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'St Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('shares', 'Shares:') !!}
        {!! Form::text('shares',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchase_price', 'Purchase Price:') !!}
        {!! Form::text('purchase_price',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchased', 'Purchase Date:') !!}
        {!! Form::text('purchased',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop

