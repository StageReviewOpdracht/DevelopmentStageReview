@extends('layouts.app')

@section('content')

<?php
use App\Http\Controllers\CompanyController;
$data = CompanyController::index();
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <h1>Test Page</h1>
                                <table>
                                    <tr>
                                        <th><h1>Bedrijfsnaam:</h1></th>
                                        <th><h1>Locatie:</h1></th>
                                    </tr>
                                    @foreach($data as $company)
                                    <tr>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->location }}</td>
                                        <td><a class="btn btn-success" href="{{action('CompanyController@show', ['id' => $company->id])}}">View</a></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection