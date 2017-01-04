@extends('layouts.app')
@section('content')
 <div class="container">
        <div class="row">
            <!-- <div class="col-md-8 col-md-offset-2"> -->
                <div class="panel panel-default">
                    <div class="panel-heading">    <h1>Customer</h1>
    <a href="{{url('/customers/create')}}" class="btn btn-success">Create Customer</a>
    <hr>
     <div class="table-responsive"> 
<!--     <table class="table table-striped table-bordered table-hover"> -->
        <table class="table table-bordered table-striped cds-datatable">
        <thead>
        <tr class="bg-info">
            <th>Cust Number</th>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Primary Email</th>
            <th>Home Phone</th>
            <th>Cell Phone</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td class="table-text">{{ $customer->cust_number }}</td>
                <td class="table-text">{{ $customer->name }}</td>
                <td class="table-text">{{ $customer->address }}</td>
                <td class="table-text">{{ $customer->city }}</td>
                <td class="table-text">{{ $customer->state }}</td>
                <td class="table-text">{{ $customer->zip }}</td>
                <td class="table-text">{{ $customer->email }}</td>
                <td class="table-text">{{ $customer->home_phone }}</td>
                <td class="table-text">{{ $customer->cell_phone }}</td>
                <td class="table-text"><a href="{{url('customers',$customer->id)}}" class="btn btn-primary">Portfolio</a></td>
                <td class="table-text"><a href="{{route('customers.edit',$customer->id)}}" class="btn btn-warning">Update</a></td>
                <td class="table-text">
                    {!! Form::open(['method' => 'DELETE', 'route'=>['customers.destroy', $customer->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
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