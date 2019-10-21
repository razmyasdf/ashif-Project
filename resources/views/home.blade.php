@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card card-primary">
                            <div class="card-header">

                            </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                        <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="date" name="vehicle" value="" placeholder="vehicle chassis number">
                                                    <button type="submit" class="btn btn-primary">Add</button>
                                                </div>
                                            </div>


                                            <table id="example2" class="table table-bordered table-light">
                                                    <thead class="thead-dark">
                                                         <tr>
                                                            <th>Vehicle Chassis Number</th>

                                                            <th></th>

                                                    <tbody>

                                                            <tr>

                                                            <td>cc1152d588</td>

                                                            <td>
                                                            <form method="GET" action="">
                                                                @csrf
                                                                <button type="sumbit" class="btn btn-block btn-outline-success btn-xs" >Edit</button>
                                                            </form>

                                                            <form action="" method="POST">
                                                                @csrf
                                                                <button type="sumbit" class="btn btn-block btn-outline-success btn-xs" >Add Image</button>
                                                            </form>
                                                            <form action="" method="POST">
                                                                    @csrf
                                                                    <button type="sumbit" class="btn btn-block btn-outline-success btn-xs" >View</button>
                                                                </form>
                                                            </td>

                                                            </tr>


                                                    </tbody>
                                                </table>
                                                        </tr>
                                                    </thead>


                                </div>
                    </div>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
