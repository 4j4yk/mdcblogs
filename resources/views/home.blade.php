<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
               /* margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;*/
              /*  font-family: 'Lato';*/
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 46px;
            }
        </style>
        @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="title">Assignment 1</div>
                <div class="panel-heading">Welcome to my Dashboard, Assignment details are as below </div><br>
            </div>
                <div class="panel-body">
                <div class="container">     
                    <div class="content">
            
            <dl class="nav navbar-nav">
                <dt><a href="{{ url('/posts') }}"><i class="fa fa-check-square" aria-hidden="true"></i></i> Assign 1P1</a> - One table blog with Posting CRUD Functions </dt>
<!--                 <dd>One table blog with Posting CRUD Functions</dd> -->
                <li class="divider"></li>
                <dt><a href="{{ url('/customers') }}"><i class="fa fa-check-square" aria-hidden="true"></i></i> Assign 1P2</a> - Multiple table blog (EFS) with Customer, Stock and Investment CRUD Functions </dt>
                <dd></dd>
                
                <li class="divider"></li>
               
               <dt><a href="{{ url('/customers') }}"><i class="fa fa-check-square" aria-hidden="true"></i>
               </i> Assign 1P3</a>- Customer Portfolio and REST/JSON API Implementation</dt>               
               </dl></div></div></div></div></div></div>

            </div>
            </div>
              	
    		</div>
            </div>
        </div>
    </div>
</div>
@endsection
