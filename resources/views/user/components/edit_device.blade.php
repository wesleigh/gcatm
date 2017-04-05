<div id="edit_{{ $device->id }}" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Register Device</h5>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="/devices/edit">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $device->id }}">
            <fieldset class="content-user">
              <legend class="text-bold">Basic Information</legend>

              <div class="form-group has-feedback has-feedback-left">
                <label>Asset Tag</label>
                <input type="text" class="form-control input-xlg" name="asset_tag" value="{{ $device->asset_tag }}">
                <div class="form-control-feedback">
                  <i class="icon-price-tag3"></i>
                </div>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <label>Serial Number</label>
                <input type="text" class="form-control input-xlg" name="serial_number" value="{{ $device->serial_number }}">
                <div class="form-control-feedback">
                  <i class="icon-barcode2"></i>
                </div>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <label>Machine Type</label>
                <input type="text" class="form-control input-xlg" name="machine_type" value="{{ $device->machine_type }}">
                <div class="form-control-feedback">
                  <i class="icon-server"></i>
                </div>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <label>Description</label>
                <input type="text" class="form-control input-xlg" name="description" value="{{ $device->description }}">
                <div class="form-control-feedback">
                  <i class="icon-question4"></i>
                </div>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <label>Location</label>
                <input type="text" class="form-control input-xlg" name="location" value="{{ $device->location }}">
                <div class="form-control-feedback">
                  <i class="icon-location4"></i>
                </div>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <label>Warranty Expire</label>
                <input type="text" class="form-control input-xlg" name="warranty_expire" value="{{ $device->warranty_expire }}">
                <div class="form-control-feedback">
                  <i class="icon-warning"></i>
                </div>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <label>User</label>
                <input type="text" class="form-control input-xlg" name="user" value="{{ $device->user }}">
                <div class="form-control-feedback">
                  <i class="icon-user"></i>
                </div>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <label>Patch Range</label>
                <input type="text" class="form-control input-xlg" name="patch_range" value="{{ $device->patch_range }}">
                <div class="form-control-feedback">
                  <i class="icon-calendar"></i>
                </div>
              </div>

            </fieldset>
          </div>
          <div class="modal-footer">
            <button class="btn btn-link" data-dismiss="modal"><i class="icon-cross"></i> Close</button>
            <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
