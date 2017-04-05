@include('user.components.header')

<body data-spy="scroll" data-target=".sidebar-detached" class="has-detached-right">

<div class="container-detached">
    <div class="content-detached">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Device Registry</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    </ul>
                </div>
                <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
              </div>
              <div class="table">
                  <table class="table table-hover">
                      <thead>
                      <tr>
                          <th style="width: 40px;">#</th>
                          <th>Type</th>
                          <th>Serial Number</th>
                          <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                      </tr>
                      </thead>
                      <tbody>
                        @if(count($devices) > 0)
                          @foreach($devices as $device)
                            <tr>
                                <td>{{ $device->id }}</td>
                                <td>{{ $device->machine_type }}</td>
                                <td>{{ $device->serial_number }}</td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a data-target="#edit_{{ $device->id }}" data-toggle="modal"><i class="icon-pencil"></i> Quick Edit</a></li>
                                                <li><a href="/devices/delete/{{ $device->id }}"><i class="icon-trash text-danger"></i> Remove Device</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @include('user.components.edit_device')
                          @endforeach
                        @else
                          <tr>
                            <td></td>
                            <td>No devices registered yet</td>
                          </tr>
                        @endif

                      </tbody>
                  </table>
              </div>
          </div>


        <div class="sidebar-detached affix-top">
            <div class="sidebar sidebar-default">
                <div class="sidebar-content">
                    <div class="sidebar-category no-margin">
                        <div class="category-title">
                            <span>Management Tools</span>
                        </div>
                        <div class="sidebar-category">
                            <div class="category-content no-padding">
                                <ul class="nav navigation">
                                    <li class="navigation-header"> Actions</li>
                                    <li><a data-toggle="modal" data-target="#add_device"><i class="icon-database-add text-slate-400"></i> Add Device</a></li>
                                    <li><a data-toggle="modal" data-target="#search"><i class="icon-search4 text-slate-400"></i>Find Device </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="add_device" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                	<button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Register Device</h5>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" method="post" action="/devices/create">
                    {{ csrf_field() }}
                    <fieldset class="content-user">
                      <legend class="text-bold">Basic Information</legend>

                      <div class="form-group has-feedback has-feedback-left">
                        <label>Asset Tag</label>
                        <input type="text" class="form-control input-xlg" name="asset_tag">
                        <div class="form-control-feedback">
                          <i class="icon-price-tag3"></i>
                        </div>
                      </div>

                      <div class="form-group has-feedback has-feedback-left">
                        <label>Serial Number</label>
                        <input type="text" class="form-control input-xlg" name="serial_number">
                        <div class="form-control-feedback">
                          <i class="icon-barcode2"></i>
                        </div>
                      </div>

                      <div class="form-group has-feedback has-feedback-left">
                        <label>Machine Type</label>
                        <input type="text" class="form-control input-xlg" name="machine_type">
                        <div class="form-control-feedback">
                          <i class="icon-server"></i>
                        </div>
                      </div>

                      <div class="form-group has-feedback has-feedback-left">
                        <label>Description</label>
                        <input type="text" class="form-control input-xlg" name="description">
                        <div class="form-control-feedback">
                          <i class="icon-question4"></i>
                        </div>
                      </div>

                      <div class="form-group has-feedback has-feedback-left">
                        <label>Location</label>
                        <input type="text" class="form-control input-xlg" name="location">
                        <div class="form-control-feedback">
                          <i class="icon-location4"></i>
                        </div>
                      </div>

                      <div class="form-group has-feedback has-feedback-left">
                        <label>Warranty Expire</label>
                        <input type="text" class="form-control input-xlg" name="warranty_expire">
                        <div class="form-control-feedback">
                          <i class="icon-warning"></i>
                        </div>
                      </div>

                      <div class="form-group has-feedback has-feedback-left">
                        <label>User</label>
                        <input type="text" class="form-control input-xlg" name="user">
                        <div class="form-control-feedback">
                          <i class="icon-user"></i>
                        </div>
                      </div>

                      <div class="form-group has-feedback has-feedback-left">
                        <label>Patch Range</label>
                        <input type="text" class="form-control input-xlg" name="patch_range">
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

          <div id="search" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Search Devices</h5>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" method="post" action="/devices/search">
                      {{ csrf_field() }}
                      <fieldset class="content-user">
                        <legend class="text-bold">Basic Information</legend>

                        <div class="form-group has-feedback has-feedback-left">
                          <label>Serial Number</label>
                          <input type="text" class="form-control input-xlg" name="serial_number">
                          <div class="form-control-feedback">
                            <i class="icon-barcode2"></i>
                          </div>
                        </div>


                      </fieldset>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-link" data-dismiss="modal"><i class="icon-cross"></i> Close</button>
                      <button type="submit" class="btn btn-primary"><i class="icon-search4"></i> Find</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
