<div id="edit_{{ $user->id }}" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Editing <b>{{ $user->username }}</b></h5>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="/users/edit">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $user->id }}">
            <fieldset class="content-user">
              <legend class="text-bold">Basic Information</legend>

              <div class="form-group has-feedback has-feedback-left">
                <label>Username</label>
                <input type="text" class="form-control input-xlg" name="username" value="{{ $user->username }}">
                <div class="form-control-feedback">
                  <i class="icon-vcard"></i>
                </div>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <label>Password</label>
                <input type="text" class="form-control input-xlg" name="password">
                <div class="form-control-feedback">
                  <i class="icon-lock"></i>
                </div>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <label>Email</label>
                <input type="text" class="form-control input-xlg" name="email" value="{{ $user->email }}">
                <div class="form-control-feedback">
                  <i class="icon- icon-envelop5"></i>
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
