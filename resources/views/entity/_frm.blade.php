<div class="col-md-3">
    <div class="form-group">
        <label for="parent_id">Parent Entity</label>
        <select name="parent_id" id="parent_id" class="form-control">
            <option value="0">No parent</option>
        </select>
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label for="has_childs">Has Childs</label>
        <select name="has_childs" id="has_childs" class="form-control">
            @foreach (YESNO as $k => $v)
                <option value="{{ $k }}" {{ isset($entity->has_childs) && $entity->has_childs == $k ? 'selected' : '' }}>{{ $v }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="heading">Heading</label>
        <input type="text" name="heading" class="form-control slugSource" id="heading" value="{{ !empty($entity->heading) ? $entity->heading : '' }}">
    </div>
</div>
<div class="col-md-3 d-none">
    <div class="form-group">
        <label for="slug">Identifier slug</label>
        <input type="hidden" name="slug" class="form-control slugDestination" id="slug" value="{{ !empty($entity->slug) ? $entity->slug : '' }}">
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label for="menu_title">Menu Title</label>
        <input type="text" name="menu_title" class="form-control" id="menu_title" value="{{ !empty($entity->menu_title) ? $entity->menu_title : '' }}">
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label for="show_in_menu">Show in Menu</label>
        <select name="show_in_menu" id="show_in_menu" class="form-control">
            @foreach (YESNO as $k => $v)
                <option value="{{ $k }}" {{ isset($entity->show_in_menu) && $entity->show_in_menu == $k ? 'selected' : '' }}>{{ $v }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label for="published">Entity Status</label>
        <select name="published" id="published" class="form-control">
            @foreach (PUBLISHED as $k => $v)
                <option value="{{ $k }}" {{ isset($entity->published) && $entity->published == $k ? 'selected' : '' }}>{{ $v }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label for="published">Client Involved</label>
        <select name="involve_client" id="involve_client" class="form-control">
            @foreach (YESNO as $k => $v)
                <option value="{{ $k }}" {{ isset($entity->involve_client) && $entity->involve_client == $k ? 'selected' : '' }}>{{ $v }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="icon">Icon</label>
        <input type="file" name="icon" class="form-control" id="icon">
    </div>
</div>
<div class="col-md-2">
    <div class="form-group">
        @if(!empty($entity->icon) && file_exists(public_path() . '/' .  $entity->icon))
        <img class="img-fluid iconImg" src="{{ asset($entity->icon) }}"/>
        @endif
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="description">Entity Description</label>
        <textarea name="description" id="description" class="form-control">{{ !empty($entity->description) ? $entity->description : '' }}</textarea>
    </div>
</div>