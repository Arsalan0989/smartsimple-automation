<div class="col-md-6">
    <div class="form-group">
        <label for="name">Client name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter client name"
            value="{{ !empty($client->name) ? $client->name : '' }}">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="organization">Organization</label>
        <input type="text" class="form-control" id="organization" name="organization"
            placeholder="Enter organization name"
            value="{{ !empty($client->organization) ? $client->organization : '' }}">
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" id="address" name="address"
            placeholder="Enter organization address">{{ !empty($client->address) ? $client->address : '' }}</textarea>
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" name="country" placeholder="Enter organization country"
            value="{{ !empty($client->country) ? $client->country : '' }}">
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label for="state">State</label>
        <input type="text" class="form-control" id="state" name="state" placeholder="Enter organization state"
            value="{{ !empty($client->state) ? $client->state : '' }}">
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Enter organization city"
            value="{{ !empty($client->city) ? $client->city : '' }}">
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label for="zipcode">Zipcode</label>
        <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Enter organization zipcode"
            value="{{ !empty($client->zipcode) ? $client->zipcode : '' }}">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="lat">Latitude</label>
        <input type="text" class="form-control" id="lat" name="lat" placeholder="Enter organization address latitude"
            value="{{ !empty($client->lat) ? $client->lat : '' }}">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="lng">Longitude</label>
        <input type="text" class="form-control" id="lng" name="lng" placeholder="Enter organization address logitude"
            value="{{ !empty($client->lng) ? $client->lng : '' }}">
    </div>
</div>
