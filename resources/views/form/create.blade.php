@extends('layouts.app-ui')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Create New Form') }}</div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                            {{-- <form class="frmMain my-2" action="{{ route('form.store') }}" method="post" enctype="multipart/form-data">
                                @csrf --}}
                            <form method="post" action="{{ route('entity.alot.attribute') }}" class="frm-alot-property" onsubmit="return processTheChildForm(this)">
                                @csrf
                                <div class="row">
                                    @include('form._frm')
                                    <div class="tab-pane fade active show" id="attribute" role="tabpanel" aria-labelledby="attribute-tab">
                                        @include('form._attribute-options')
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-success"><i class="fa fas fa-save"></i> Save</button>
                                        <a class="btn btn-danger" href="{{ route('form.index') }}"><i class="fa fas fa-times"></i> Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jscode')
@endsection
