@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Companies') }}</div>

                <div class="card-body">
                        <div class="form-group row">
                            @foreach ($company as $com)
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                            <div class="col-md-6">
                                <h1>{{$com->name}}</h1>
                            </div>
                            @endforeach
                        </div>
<!-- @foreach ($company as $item)
  <div class="col-md-4">
    <h3>{{$item->name}}<h3>
    <h4>Location: {{$item->location}}</h4>     
  </div>        
@endforeach -->
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('location') }}</label>

                            <div class="col-md-6">
                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection