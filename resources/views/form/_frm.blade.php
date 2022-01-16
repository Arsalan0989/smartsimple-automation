<div class="col-md-6">
    <div class="form-group">
        <label for="name">Form Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter client name"
            value="{{ !empty($client->name) ? $client->name : '' }}">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="organization">Form Visibility</label>
        <select name="visibility" id="visibility" required="required" class="form-control">
            <option value="">Select Form Visibility</option> 
            <option value="PUBLIC">PUBLIC (available to all users)</option> 
            <option value="PRIVATE">PRIVATE (available to only logged in users)</option>
        </select>
    </div>
</div>

