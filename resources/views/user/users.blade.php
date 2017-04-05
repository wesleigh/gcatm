@include('user.components.header')

<body data-spy="scroll" data-target=".sidebar-detached" class="has-detached-right">

<div class="container-detached">
    <div class="content-detached">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">User Listing</h5>
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
                          <th>Username</th>
                          <th>Email</th>
                          <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                          <tr>
                              <td>{{ $user->id }}</td>
                              <td>{{ $user->username }}</td>
                              <td>{{ $user->email }}</td>
                              <td class="text-center">
                                  <ul class="icons-list">
                                      <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                          <ul class="dropdown-menu dropdown-menu-right">
                                              <li><a data-target="#edit_{{ $user->id }}" data-toggle="modal"><i class="icon-pencil"></i> Quick Edit</a></li>
                                              <li><a href="/users/delete/{{ $user->id }}"><i class="icon-trash text-danger"></i> Remove User</a></li>
                                          </ul>
                                      </li>
                                  </ul>
                              </td>
                          </tr>
                          @include('user.components.edit_user')
                        @endforeach
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
                                    <li><a data-toggle="modal" data-target="#add_user"><i class="icon-database-add text-slate-400"></i> Add User</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="add_user" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                	<button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Create User</h5>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" method="post" action="/users/create">
                    {{ csrf_field() }}
                    <fieldset class="content-user">
                      <legend class="text-bold">Basic Information</legend>

                      <div class="form-group has-feedback has-feedback-left">
                        <label>Username</label>
                        <input type="text" class="form-control input-xlg" name="username">
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
                        <input type="text" class="form-control input-xlg" name="email">
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
