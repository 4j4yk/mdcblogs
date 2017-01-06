@extends('layouts.app')
@section('content')
 <div class="container">
        <div class="row">
            <!-- <div class="col-md-8 col-md-offset-2"> -->
                <div class="panel panel-default">
                    <div class="panel-heading">    <h1>Investments</h1>
    <a href="{{url('/customers/create')}}" class="btn btn-success">Create Investments</a>
    <hr>
     <div class="table-responsive"> 
<!--     <table class="table table-striped table-bordered table-hover"> -->
        <table class="table table-bordered table-striped cds-datatable">
        <thead>
        <tr class="bg-info">
            <th>Cust No</th>
            <th>Cust Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Acquired Value</th>
            <th>Acquired Date</th>
            <th>Recent Value</th>
			<th>Recent Date</th>
            <th colspan="3">Actions</th>
          </tr>
        </thead>
        <tbody>
      
        @foreach ($Investment as $Investment)
            <tr>
                <td>{{ $Investment->customer->cust_number }}</td>
                <td>{{ $Investment->customer->name }}</td>
                <td>{{ $Investment->category }}</td>
                <td>{{ $Investment->description }}</td>
                <td>{{ $Investment->acquired_value }}</td>
                <td>{{ $Investment->acquired_date }}</td>
                <td>{{ $Investment->recent_value }}</td>
				<td>{{ $Investment->recent_date }}</td>
                <td><a href="{{url('investments',$Investment->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('investments.edit',$Investment->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['investments.destroy', $Investment->id]]) !!}
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