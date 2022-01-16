@extends('layouts.app-ui')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Update Client') }}</div>
                <div class="card-body">
                    <form class="frmMain" action="{{ route('client.update', ['client' => $client->id]) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            @include('client._frm')
                            <div class="col-md-12 text-right">
                                <button class="btn btn-success"><i class="fa fas fa-save"></i> Update</button>
                                <a class="btn btn-danger" href="{{ route('client.index') }}"><i class="fa fas fa-times"></i> Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
