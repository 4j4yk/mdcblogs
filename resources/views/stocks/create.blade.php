@extends('layouts.app')
@section('content')
 <div class="container">
        <div class="row">
            <!-- <div class="col-md-8 col-md-offset-2"> -->
                <div class="panel panel-default">
                    <div class="panel-heading"> 

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                         <ul>
                             @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                             @endforeach
                         </ul>
                    </div>
                    @endif


                    <h1>Create New Stock</h1>
                    {!! Form::open(['url' => 'stocks']) !!}

                        <div class="form-group">
                            {!! Form::select('customer_id', $customers) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('symbol', 'Symbol:') !!}
                            {!! Form::text('symbol',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Stock Name:') !!}
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
                                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                            </div>
                    {!! Form::close() !!}
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
