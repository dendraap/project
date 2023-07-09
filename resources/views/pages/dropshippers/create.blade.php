@extends('layouts.app', ['activePage' => 'dropshippers', 'titlePage' => __('Add Dropshippers - Manage Dropshippers'), 'title' => __('Add Dropshippers - Manage Dropshippers')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="/dropshippers" class="form-horizontal">
                    @csrf
                    @method('post')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Add Dropshippers</h4>
                            <p class="card-category">Here is you can add new dropshippers in CV Tiga Putra</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                  <a href="/dropshippers" class="btn btn-sm btn-danger"><i class="material-icons mr-1">arrow_back</i>Back to list</a>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-role-name" type="text" placeholder="{{ __('') }}" required/>
                                        @if ($errors->has('name'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Address') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" id="alamat" type="textarea" placeholder="{{ __('') }}" required/>
                                        @if ($errors->has('alamat'))
                                        <span id="alamat-error" class="error text-danger" for="alamat">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('ADD') }}</button>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection