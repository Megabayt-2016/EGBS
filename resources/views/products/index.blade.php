@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">


        <div class="col-md-12">
            <h4>List Of Products</h4>
            <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">

                    <thead>

                        <th><input type="checkbox" id="checkall" /></th>
                        <th>name</th>
                        <th>Description</th>
                        <th>QTY</th>
                        <th>Price</th>
                        <th>Edit</th>

                        <th>Delete</th>
                    </thead>
                    <tbody>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Mohsin</td>
                            <td>Irshad</td>
                            <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                            <td>isometric.mohsin@gmail.com</td>
                            <td><a href="#" class="btn btn-primary btn-xs">edit</a></td>
                            <td><a href="#" class="btn btn-danger btn-xs">delete</a></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection