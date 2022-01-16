@extends('layouts.app-ui')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Create New Entity') }}</div>
                <div class="card-body">
                    <form class="frmMain" action="{{ route('entity.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            @include('entity._frm')
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success"><i class="fa fas fa-save"></i> Save</button>
                                <a class="btn btn-danger" href="{{ route('entity.index') }}"><i class="fa fas fa-times"></i> Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection