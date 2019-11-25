@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a class="nav-link" href="{{ URL::to('companyindex') }}">Back to all the companies</a>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <h1>Company Page</h1>
                            <p><strong>Companies:</strong> {{ $company->name }}</p>
                            <p><strong>Locations:</strong> {{ $company->location }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                        <h3>Review</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection