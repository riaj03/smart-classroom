@extends('layouts.app')

@section('content')
    <div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">Contacts</div>

            <div class="panel-body">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Sl</th>
                      
                        <th scope="col">Name </th>
                        <th scope="col">Email</th>
                         <th scope="col">Mobile No</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Ahmed Iqbal Pritom</td>
                        <td>pritom@gmail.com</td>
                        <td>000000000</td>
                      </tr>                  
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    </div>
@endsection
