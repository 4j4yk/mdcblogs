@extends('layouts.app')
@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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


                    <h1>Create New Customer</h1>
                    {!! Form::open(['url' => 'customers']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('cust_number', 'Customer Number') !!}
                        {!! Form::text('cust_number',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('address', 'Street Address:') !!}
                        {!! Form::text('address',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('city', 'City:') !!}
                        {!! Form::text('city',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('state', 'State:') !!}
                        {!! Form::text('state',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('zip', 'Zip:') !!}
                        {!! Form::text('zip',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Primary Email:') !!}
                        {!! Form::text('email',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('home_phone', 'Home Phone:') !!}
                        {!! Form::text('home_phone',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('cell_phone', 'Cell Phone:') !!}
                        {!! Form::text('cell_phone',null,['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection



@section('footer')
    <style>
        .table td { border: 0px !important; }
        .tooltip-inner { white-space:pre-wrap; max-width: 400px; }
    </style>

    <script>
        $(document).ready(function() {
            $('table.cds-datatable').on( 'draw.dt', function () {
                $('tr').tooltip({html: true, placement: 'auto' });
            } );

            $('tr').tooltip({html: true, placement: 'auto' });
        } );
    </script>
@endsection