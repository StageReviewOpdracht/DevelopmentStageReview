@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <nav class="nav">
		            <a class="nav-link" href="{{ URL::to('companyindex') }}">Back to all the companies</a>
	            </nav>
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <h1>Company Page</h1>
                            <p><strong>Bedrijfsnaam:</strong> {{ $company->name }}</p>
                            <p><strong>Locatie:</strong> {{ $company->location }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection