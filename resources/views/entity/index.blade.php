@extends('layouts.app-ui')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Entities Listing') }}</div>
                <div class="card-body">
                    @if($entities->count() > 0)
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Parent</th>
                            <th>Has Childs</th>
                            <th>Heading</th>
                            <th>Icon</th>
                            <th>Menu</th>
                            <th>Menu Show</th>
                            <th>Active</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($entities as $entity)
                                <tr>
                                    <td>{{ empty($entity->parent_id) ? 'None' : 'Yes' }}</td>
                                    <td>{{ YESNO[$entity->has_childs] }}</td>
                                    <td>{{ $entity->heading }}</td>
                                    <td><img src="{{ asset($entity->icon) }}" class="img-fluid iconImg"/></td>
                                    <td>{{ $entity->menu_title }}</td>
                                    <td>{{ $entity->show_in_menu }}</td>
                                    <td>{{ $entity->published }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                              Actions
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="{{ route('entity.edit', ['entity' => $entity->id]) }}" class="text-info"><i class="fa fas fa-edit"></i> Modify</a>
                                                <form action="{{ route('entity.destroy', ['entity' => $entity->id]) }}" method="post" class="form-inline">
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
                        {!! $entities->render() !!}
                    </div>
                    @else
                    <div class="alert alert-info">No entity added yet. <a href="{{ route('entity.create') }}"><i class="fa fas fa-plus"></i> Add new entity.</a></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
