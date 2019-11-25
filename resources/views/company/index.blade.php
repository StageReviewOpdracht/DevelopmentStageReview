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
                                <h1><strong>Companies</strong></h1>
                                <table>
                                    <tr>
                                        <th><h3>Companies</h3></th>
                                        <th><h3>Locations</h3></th>
                                    </tr>
                                    @foreach($data as $company)
                                    <tr>
                                        <td><a href="{{action('CompanyController@show', ['id' => $company->id])}}">{{ $company->name }}</a></td>
                                        <td>{{ $company->location }}</td>
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