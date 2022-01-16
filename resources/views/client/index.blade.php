@extends('layouts.app-ui')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Clients Listing') }}</div>
                <div class="card-body">
                    @if($clients->count() > 0)
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Name</th>
                            <th>Organization</th>
                            <th>Location</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->organization }}</td>
                                    <td>{{ $client->city . ', ' . $client->country }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                              Actions
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="{{ route('client.edit', ['client' => $client->id]) }}" class="text-info"><i class="fa fas fa-edit"></i> Modify</a>
                                                <form action="{{ route('client.destroy', ['client' => $client->id]) }}" method="post" class="form-inline">
                                                    <button class="text-danger"><i class="fa fas fa-trash"></i> Delete</button>
                                                    <input type="hidden" name="_method" value="delete" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                </form>
                                            </div>
                                          </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {!! $clients->render() !!}
                    </div>
                    @else
                    <div class="alert alert-info">No client added yet. <a href="{{ route('client.create') }}"><i class="fa fas fa-plus"></i> Add new client.</a></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
