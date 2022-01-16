@extends('layouts.app-ui')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $entity->menu_title . ' Records' }}</div>
                <div class="card-body">
                    @if($records->count() > 0)
                    <table class="table table-bordered table-striped">
                        <thead>
                            @foreach($entity->attributes as $attHead)
                            <th>{{ $attHead->slug }}</th>
                            @endforeach
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                                <tr>
                                    @foreach($entity->attributes as $attHead)
                                        <td>{{ $record->entityDataValues->where('attribute_value_id', $helperModel->entityAttributeSubmittedDataId($attHead))->pluck('attribute_entity_value')[0] }}</td>
                                    @endforeach
                                    <td>Actions</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {!! $records->render() !!}
                    </div>
                    @else
                    <div class="alert alert-info">No entity added yet. <a href="{{ route('add.entity.records', ['entityid' => $entity->id]) }}"><i class="fa fas fa-plus"></i> Add new {{ $entity->heading }}.</a></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
