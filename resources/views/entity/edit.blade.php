@extends('layouts.app-ui')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Update Entity') }}</div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic" role="tab"
                                aria-controls="basic" aria-selected="true">Basic Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="attribute-tab" data-toggle="tab" href="#attribute" role="tab"
                                aria-controls="attribute" aria-selected="false">Entity Properties</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                            <form class="frmMain my-2" action="{{ route('entity.update', ['entity' => $entity->id]) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="row">
                                    @include('entity._frm')
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-success"><i class="fa fas fa-save"></i> Update</button>
                                        <a class="btn btn-danger" href="{{ route('entity.index') }}"><i
                                                class="fa fas fa-times"></i> Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="attribute" role="tabpanel" aria-labelledby="attribute-tab">
                            @if (!empty($entity->id))
                                @include('entity._attribute-options')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jscode')

@endsection
