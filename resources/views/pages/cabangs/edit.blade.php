@extends('layouts.app', ['activePage' => 'cabangs', 'titlePage' => __('Edit Branch - Manage Branch'), 'title' => __('Edit Branch - Manage Branch')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="/branchs/{{ $cabang->id }}" class="form-horizontal">
                    @csrf
                    @method('put')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Branch</h4>
                            <p class="card-category">Here is you can edit branch in CV Tiga Putra</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                  <a href="/branchs" class="btn btn-sm btn-danger"><i class="material-icons mr-1">arrow_back</i>Back to list</a>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Address') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }} " name="alamat" id="alamat" type="text" placeholder="{{ __('') }}" required value="{{ old('alamat', $cabang->alamat) }}"/>
                                        @if ($errors->has('name'))
                                        <span id="alamat" class="error text-danger" for="alamat">{{ $errors->first('alamat') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('SAVE') }}</button>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection