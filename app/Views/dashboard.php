
<?= $this->include('layout/header'); ?>
<?= $this->include('layout/header_bar'); ?>

      
      <div class="content-body">
        <div class="card card-hover card-task-one">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <h6 class="card-title">Open Tasks</h6>
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <h1 class="card-value">932 <span class="tx-success"><i class="icon ion-android-arrow-up"></i>2.3%</span></h1>
                  <div class="chart-wrapper">
                    <div id="flotChart1" class="flot-chart"></div>
                  </div>
                </div>
                <p class="card-desc">skills that require mastery of many details in an ever-changing environment. </p>
              </div><!-- col -->
              <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
                <h6 class="card-title">Closed Tasks</h6>
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <h1 class="card-value">268 <span class="tx-success"><i class="icon ion-android-arrow-up"></i>2.4%</span></h1>
                  <div class="chart-wrapper">
                    <div id="flotChart2" class="flot-chart"></div>
                  </div>
                </div>
                <p class="card-desc">are represented as fairly standardized skills in a relatively constant environment.</p>
              </div><!-- col -->
              <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
                <h6 class="card-title">Total Time Spent</h6>
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <h1 class="card-value">746 <span class="tx-color-03">hours</span></h1>
                  <div class="chart-wrapper">
                    <div id="flotChart3" class="flot-chart"></div>
                  </div>
                </div>
                <p class="card-desc">represents the total amount of time users interact with a specific dimension item.</p>
              </div><!-- col -->
              <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
                <h6 class="card-title">Total Time Remaining</h6>
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <h1 class="card-value">231 <span class="tx-color-03">hours</span></h1>
                  <div class="chart-wrapper">
                    <div id="flotChart4" class="flot-chart"></div>
                  </div>
                </div>
                <p class="card-desc">the total amount of time users interact with a specific dimension item.</p>
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->
        <div class="row row-sm mg-t-15 mg-sm-t-20">
          <div class="col-sm-6 col-xl">
            <div class="card card-hover card-todo">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                <h6 class="card-title mg-b-0">To-Do Tasks</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <div class="list-group-header">
                    <span class="bg-purple"></span>
                    <span class="bg-success"></span>
                    <a href="" class="link-03 mg-l-auto"><i data-feather="more-horizontal" class="svg-16"></i></a>
                  </div>
                  <h6 class="tx-13 mg-b-3"><a href="" class="link-01">Javascript countdown timer link</a></h6>
                  <p class="todo-date">Today, July 29, 2019</p>

                  <div class="card-progress">
                    <label class="content-label mg-b-0">Progress</label>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <label class="content-label mg-b-0">0%</label>
                  </div>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="avatar-group">
                      <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                      <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                      <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                      <a href="" class="avatar-add"><i data-feather="plus" class="svg-12"></i></a>
                    </div>
                    <span class="badge badge-warning">Javascript</span>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="list-group-header">
                    <span class="bg-blue"></span>
                    <a href="" class="link-03 mg-l-auto"><i data-feather="more-horizontal" class="svg-16"></i></a>
                  </div>
                  <h6 class="tx-13 mg-b-3"><a href="" class="link-01">Track in HTML 5</a></h6>
                  <p class="todo-date">Today, July 29, 2019</p>

                  <div class="card-progress">
                    <label class="content-label mg-b-0">Progress</label>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <label class="content-label mg-b-0">0%</label>
                  </div>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="avatar-group">
                      <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                      <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                      <a href="" class="avatar-add"><i data-feather="plus" class="svg-12"></i></a>
                    </div>
                    <span class="badge bg-orange tx-white">HTML</span>
                  </div>
                </li>
              </ul>
              <div class="card-footer bg-transparent bd-t-0">
                <a href="" class="btn btn-block"><i class="icon ion-plus tx-12"></i> Add Task</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl mg-t-15 mg-sm-t-0">
            <div class="card card-hover card-todo">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                <h6 class="card-title mg-b-0">In Progress Tasks</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <div class="list-group-header">
                    <span class="bg-pink"></span>
                    <span class="bg-blue"></span>
                    <a href="" class="link-03 mg-l-auto"><i data-feather="more-horizontal" class="svg-16"></i></a>
                  </div>
                  <h6 class="tx-13 mg-b-3"><a href="" class="link-01">Making a beautiful CSS3 button</a></h6>
                  <p class="todo-date">Today, July 29, 2019</p>

                  <div class="card-progress">
                    <label class="content-label mg-b-0">Progress</label>
                    <div class="progress">
                      <div class="progress-bar wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <label class="content-label mg-b-0">50%</label>
                  </div>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="avatar-group">
                      <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                      <a href="" class="avatar-add"><i data-feather="plus" class="svg-12"></i></a>
                    </div>
                    <span class="badge badge-primary">CSS</span>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="list-group-header">
                    <span class="bg-green"></span>
                    <a href="" class="link-03 mg-l-auto"><i data-feather="more-horizontal" class="svg-16"></i></a>
                  </div>
                  <h6 class="tx-13 mg-b-3"><a href="" class="link-01">Create a graph of all classes</a></h6>
                  <p class="todo-date">Today, July 29, 2019</p>

                  <div class="card-progress">
                    <label class="content-label mg-b-0">Progress</label>
                    <div class="progress">
                      <div class="progress-bar wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <label class="content-label mg-b-0">65%</label>
                  </div>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="avatar-group">
                      <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                      <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                      <a href="" class="avatar-add"><i data-feather="plus" class="svg-12"></i></a>
                    </div>
                    <span class="badge bg-danger tx-white">Ruby</span>
                  </div>
                </li>
              </ul>
              <div class="card-footer bg-transparent bd-t-0">
                <a href="" class="btn btn-block"><i class="icon ion-plus tx-12"></i> Add Task</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-xl-5 mg-t-15 mg-sm-t-20 mg-xl-t-0">
            <div class="card card-hover card-projects">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                <h6 class="card-title mg-b-0">Recent Projects</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <nav class="nav nav-card-icon">
                    <a href=""><i data-feather="activity" class="svg-16"></i></a>
                    <a href=""><i data-feather="bar-chart-2" class="svg-16"></i></a>
                    <a href=""><i data-feather="chevron-down" class="svg-16"></i></a>
                  </nav>
                  <div class="media">
                    <div class="project-logo bg-primary tx-white"><i data-feather="aperture"></i></div>
                    <div class="media-body mg-l-10 mg-sm-l-15">
                      <p class="tx-13 tx-color-04 mg-b-5">Themepixels, Inc.</p>
                      <h5 class="tx-color-01 mg-b-0">Tiger Wave Premium</h5>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <p class="project-desc">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis.</p>
                  <small class="project-deadline">End Date: July 29, 2019</small>
                </li>
                <li class="list-group-item">
                  <nav class="nav nav-card-icon">
                    <a href=""><i data-feather="activity" class="svg-16"></i></a>
                    <a href=""><i data-feather="bar-chart-2" class="svg-16"></i></a>
                    <a href=""><i data-feather="chevron-down" class="svg-16"></i></a>
                  </nav>
                  <div class="media">
                    <div class="project-logo bg-green tx-white"><i data-feather="music"></i></div>
                    <div class="media-body mg-l-10 mg-sm-l-15">
                      <p class="tx-13 tx-color-04 mg-b-5">Spotify, Inc.</p>
                      <h5 class="tx-color-01 mg-b-0">K3A20 Music Player</h5>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <p class="project-desc">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis.</p>
                  <small class="project-deadline">End Date: July 28, 2019</small>
                </li>
              </ul>
            </div>
          </div><!-- col -->
          <div class="col-xl-9 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-active-projects">
              <div class="card-header bg-transparent pd-15">
                <h6 class="card-title mg-b-0">Active Projects</h6>
                <nav class="nav align-items-center">
                  <span class="mg-r-5">Sort by:</span>
                  <a href=""><strong>Date Added</strong> <i class="icon ion-ios-arrow-down"></i></a>
                </nav>
              </div><!-- card-header -->
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <div class="media">
                    <div class="project-img"><img src="assets/img/img16.png" alt=""></div>
                    <div class="media-body mg-t-10 mg-md-t-0 mg-md-l-10">
                      <h6 class="project-title"><a href="">Bootstrap Boilerplate</a></h6>
                    </div>
                  </div><!-- media -->
                  <div class="progress-wrapper">
                    <div class="progress-label"><span>Progress</span><span>45%</span></div>
                    <div class="progress">
                      <div class="progress-bar wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><!-- progress-wrapper -->
                  <div class="avatar-group">
                    <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <a href="" class="avatar-add"><i data-feather="plus" class="svg-12"></i></a>
                  </div>
                  <div class="project-date-end bg-warning-light">End Date: Aug 15, 2019</div>
                  <div><a href="" class="link-04"><i data-feather="more-horizontal" class="svg-16"></i></a></div>
                </li>
                <li class="list-group-item">
                  <div class="media">
                    <div class="project-img bg-warning"><i data-feather="sidebar" class="svg-18"></i></div>
                    <div class="media-body mg-t-10 mg-md-t-0 mg-md-l-10">
                      <h6 class="project-title"><a href="">Flexbox Grid System</a></h6>
                    </div>
                  </div><!-- media -->
                  <div class="progress-wrapper">
                    <div class="progress-label"><span>Progress</span><span>65%</span></div>
                    <div class="progress">
                      <div class="progress-bar bg-green wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="avatar-group">
                    <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <a href="" class="avatar-add"><i data-feather="plus" class="svg-12"></i></a>
                  </div>
                  <div class="project-date-end bg-success-light">End Date: Aug 20, 2019</div>
                  <div><a href="" class="link-04"><i data-feather="more-horizontal" class="svg-16"></i></a></div>
                </li>
                <li class="list-group-item">
                  <div class="media">
                    <div class="project-img bg-primary tx-white"><i data-feather="mouse-pointer" class="svg-18"></i></div>
                    <div class="media-body mg-t-10 mg-md-t-0 mg-md-l-10">
                      <h6 class="project-title"><a href="">Navigation Starter</a></h6>
                    </div>
                  </div><!-- media -->
                  <div class="progress-wrapper">
                    <div class="progress-label"><span>Progress</span><span>65%</span></div>
                    <div class="progress">
                      <div class="progress-bar bg-green wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="avatar-group">
                    <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <a href="" class="avatar-add"><i data-feather="plus" class="svg-12"></i></a>
                  </div>
                  <div class="project-date-end bg-primary-light">End Date: Aug 20, 2019</div>
                  <div><a href="" class="link-04"><i data-feather="more-horizontal" class="svg-16"></i></a></div>
                </li>
                <li class="list-group-item">
                  <div class="media">
                    <div class="project-img bg-danger tx-white"><i data-feather="code" class="svg-20"></i></div>
                    <div class="media-body mg-t-10 mg-md-t-0 mg-md-l-10">
                      <h6 class="project-title"><a href="">Angular Starter App</a></h6>
                    </div>
                  </div><!-- media -->
                  <div class="progress-wrapper">
                    <div class="progress-label"><span>Progress</span><span>20%</span></div>
                    <div class="progress">
                      <div class="progress-bar bg-warning wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="avatar-group">
                    <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <a href="" class="avatar-add"><i data-feather="plus" class="svg-12"></i></a>
                  </div>
                  <div class="project-date-end bg-primary-light">End Date: Aug 31, 2019</div>
                  <div><a href="" class="link-04"><i data-feather="more-horizontal" class="svg-16"></i></a></div>
                </li>
                <li class="list-group-item">
                  <div class="media">
                    <div class="project-img bg-blue tx-bran-04"><i data-feather="coffee" class="svg-20"></i></div>
                    <div class="media-body mg-t-10 mg-md-t-0 mg-md-l-10">
                      <h6 class="project-title"><a href="">New Java Framework</a></h6>
                    </div>
                  </div><!-- media -->
                  <div class="progress-wrapper">
                    <div class="progress-label"><span>Progress</span><span>10%</span></div>
                    <div class="progress">
                      <div class="progress-bar bg-danger wd-10p" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="avatar-group">
                    <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <a href="" class="avatar-add"><i data-feather="plus" class="svg-12"></i></a>
                  </div>
                  <div class="project-date-end bg-success-light">End Date: Sep 10, 2019</div>
                  <div><a href="" class="link-04"><i data-feather="more-horizontal" class="svg-16"></i></a></div>
                </li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-3 mg-t-15 mg-sm-t-20 order-sm-1 order-xl-0">
            <div class="card card-hover card-project-pink">
              <div class="card-body">
                <div class="project-logo bg-pink tx-white mg-b-15">
                  <i data-feather="package"></i>
                </div>
                <label class="content-label tx-9 mg-b-5">Web Design</label>
                <h5 class="card-title"><a href="">Style Ranger Plus</a></h5>
                <p class="tx-12 tx-color-03">Nam libero tempore, cum soluta nobis quidem rerum facilis est et expedita distincti.</p>
                <div class="card-progress">
                  <label class="content-label mg-b-0">Progress</label>
                  <div class="progress">
                    <div class="progress-bar bg-pink wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <label class="content-label mg-b-0">65%</label>
                </div>

                <div class="avatar-group mg-b-25">
                  <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/300/637382/fff" class="rounded-circle" alt=""></div>
                  <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/300/637382/fff" class="rounded-circle" alt=""></div>
                  <a href="" class="avatar-add"><i data-feather="plus" class="svg-14"></i></a>
                </div>

                <a href="" class="btn btn-sm btn-block btn-pink">Project Details <i class="icon ion-android-arrow-forward mg-l-5"></i></a>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-6 col-xl-4 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-project-two">
              <div class="card-header bg-transparent">
                <div>
                  <h6 class="mg-b-5">Logo Design</h6>
                  <span>Last updated: Yesterday 10:15am</span>
                </div>
                <nav class="nav nav-card-icon">
                  <a href=""><i data-feather="check-square" class="svg-14"></i> 21</a>
                  <a href=""><i data-feather="message-square" class="svg-14"></i> 85</a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <p class="tx-13 tx-gray-700">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deser.</p>
                <div class="card-progress">
                  <label class="content-label mg-b-0">Progress</label>
                  <div class="progress">
                    <div class="progress-bar bg-danger wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <label class="content-label mg-b-0">25%</label>
                </div>
              </div>
              <div class="card-footer bg-transparent">
                <div class="badge bg-blue tx-white">Ongoing</div>
                <div class="project-date-end">End: Aug 15, 2019</div>
                <div class="avatar-group">
                  <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/300/637382/fff" class="rounded-circle" alt=""></div>
                  <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/300/637382/fff" class="rounded-circle" alt=""></div>
                  <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-dark">a</span></div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-6 col-xl-4 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-project-two">
              <div class="card-header bg-transparent">
                <div>
                  <h6 class="mg-b-5">Angular Development</h6>
                  <span>Last updated: Jul 30, 2019 4:00pm</span>
                </div>
                <nav class="nav nav-card-icon">
                  <a href=""><i data-feather="check-square" class="svg-14"></i> 15</a>
                  <a href=""><i data-feather="message-square" class="svg-14"></i> 0</a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <p class="tx-13 tx-gray-700">Sunt in culpa qui officia deserunt mol excepteur sint occaecat.</p>
                <div class="card-progress">
                  <label class="content-label mg-b-0">Progress</label>
                  <div class="progress">
                    <div class="progress-bar bg-green wd-70p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <label class="content-label mg-b-0">70%</label>
                </div>
              </div>
              <div class="card-footer bg-transparent">
                <div class="badge badge-success">Completed</div>
                <div class="project-date-end">Ended: Jul 15, 2019</div>
                <div class="avatar-group">
                  <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                  <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                  <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-dark">a</span></div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-6 col-xl-4 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-project-two">
              <div class="card-header bg-transparent">
                <div>
                  <h6 class="mg-b-5">React Development</h6>
                  <span>Last updated: Jul 30, 2019 4:00pm</span>
                </div>
                <nav class="nav nav-card-icon">
                  <a href=""><i data-feather="check-square" class="svg-14"></i> 40</a>
                  <a href=""><i data-feather="message-square" class="svg-14"></i> 6</a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <p class="tx-13 tx-gray-700">Sunt in culpa qui officia deserunt mol excep teur sint occa ecat cupi datat non</p>
                <div class="card-progress">
                  <label class="content-label mg-b-0">Progress</label>
                  <div class="progress">
                    <div class="progress-bar wd-90p" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <label class="content-label mg-b-0">90%</label>
                </div>
              </div>
              <div class="card-footer bg-transparent">
                <div class="badge badge-danger">Overdue</div>
                <div class="project-date-end">Ended: Jul 15, 2019</div>
                <div class="avatar-group">
                  <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                  <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                  <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-dark">a</span></div>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-xl-6 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-project-three">
              <div class="card-body">
                <label class="content-label tx-600 tx-success mg-b-5">Food &amp; Craft</label>
                <h5 class="project-title"><a href="">The Healthier Way to Cook</a></h5>
                <p class="tx-13 tx-gray-600">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mol. Excepteur sint occaecat cupidatat non proident.</p>

                <div class="project-data-group mg-b-25">
                  <div>
                    <h3><span>$</span>3,742</h3>
                    <label>129.5% Funded</label>
                  </div>
                  <div>
                    <h3><span>$</span>2,430</h3>
                    <label>Pledged Goal</label>
                  </div>
                  <div>
                    <h3>68.4<span>%</span></h3>
                    <label>Working Progress</label>
                  </div>
                </div><!-- project-data group -->

                <div class="d-flex align-items-center">
                  <div class="avatar-group">
                    <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-green">m</span></div>
                    <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-primary">x</span></div>
                    <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-purple">b</span></div>
                  </div>
                  <span class="tx-sans tx-12 tx-color-03 mg-l-5">20 backers</span>
                  <span class="tx-sans tx-12 tx-color-03 mg-l-auto">End Date: 2 days to go</span>
                </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-xl-6 mg-t-15 mg-sm-t-20">
            <div class="card card-project-three card-project-green">
              <div class="card-body">
                <div class="marker marker-ribbon marker-success marker-top-right pos-absolute t-10 r-0">Editor's Choice</div>
                <label class="content-label tx-600 tx-success mg-b-5">Comics &amp; Illustration</label>
                <h5 class="project-title"><a href="">Our Super Antarctic Adventure: The Comic</a></h5>
                <p class="tx-13 tx-gray-600">Sunt in culpa qui officia deserunt mol. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mol.</p>

                <div class="project-data-group mg-b-25">
                  <div>
                    <h3><span>$</span>280</h3>
                    <label>15% Funded</label>
                  </div>
                  <div>
                    <h3><span>$</span>6,000</h3>
                    <label>Pledged Goal</label>
                  </div>
                  <div>
                    <h3>18<span>%</span></h3>
                    <label>Working Progress</label>
                  </div>
                </div><!-- project-data group -->

                <div class="d-flex align-items-center">
                  <div class="avatar-group">
                    <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-primary">f</span></div>
                  </div>
                  <span class="tx-sans tx-12 tx-color-03 mg-l-5">2 backers</span>
                  <span class="tx-sans tx-12 tx-color-03 mg-l-auto">End Date: Sep 30, 2019</span>
                </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-xl-8 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-calendar-one">
              <div class="row no-gutters">
                <div class="col-sm order-1 order-sm-0">
                  <div class="card-header bg-transparent pd-y-15 pd-l-20 pd-r-15 bd-b-0">
                    <div>
                      <h6 class="card-title mg-b-0">Upcoming Events</h6>
                    </div>
                    <nav class="nav">
                      <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                      <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                    </nav>
                  </div>
                  <div class="card-body pd-t-0">
                    <ul class="list-unstyled mg-b-0">
                      <li>
                        <h6 class="tx-13 mg-b-3"><a href="">Best Responsive Web Design Using CSS</a> <span class="bg-blue"></span></h6>
                        <p class="tx-12 tx-color-04 mg-b-10">Today, 8:00am - 11:00am</p>
                        <div class="avatar-group">
                          <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                          <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                          <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                          <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-secondary">3+</span></div>
                        </div>
                      </li>
                      <li>
                        <h6 class="tx-13 mg-b-3"><a href="">HTML Interview Questions and Answers</a> <span class="bg-pink"></span></h6>
                        <p class="tx-12 tx-color-04 mg-b-10">Today, 1:00pm - 5:00pm</p>
                        <div class="avatar-group">
                          <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                          <div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-dark">a</span></div>
                          <div class="avatar avatar-xxs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div><!-- col -->
                <div class="col-sm">
                  <div class="ht-100p bd-sm-l pd-x-15 pd-sm-x-20 pd-t-15 pd-sm-t-20 pd-b-15">
                    <div id="datepicker1"></div>
                  </div>
                </div><!-- col -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-4 mg-t-15 mg-sm-t-20 order-sm-2 order-xl-0">
            <div class="card card-hover card-event-one">
              <div class="card-body">
                <div class="event-logo bg-teal tx-white mg-b-15"><i data-feather="calendar"></i></div>
                <h6 class="event-title"><a href="">10th Dance Competition 2019</a></h6>
                <p class="event-desc">Sunt in culpa qui officia deserunt mol excep teur sint occa ecat cupi datat non</p>
                <div class="d-flex align-items-center mg-b-15">
                  <div class="avatar-group">
                    <div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-purple">p</span></div>
                    <div class="avatar avatar-xs"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-pink">m</span></div>
                  </div>
                  <span class="tx-11 tx-gray-500 mg-l-5">10+ friends are coming</span>
                </div>
                <a href="" class="btn btn-block btn-sm btn-primary">Get Tickets Now</a>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-6 col-xl-4 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-contact-one">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                <h6 class="card-title mg-b-0">Recently Contacted</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="avatar avatar-online"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <div class="list-body">
                      <h6>Katherine Lumaad</h6>
                      <p>katherine@themepixels.me</p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="message-square"></i></a>
                      <a href=""><i data-feather="mail"></i></a>
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-primary">m</span></div>
                    <div class="list-body">
                      <h6>Marie Recamadas</h6>
                      <p>(0929) 1234 567</p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="phone"></i></a>
                      <a href=""><i data-feather="video"></i></a>
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar avatar-offline"><span class="avatar-initial rounded-circle bg-green">r</span></div>
                    <div class="list-body">
                      <h6>Rose Faye Orcullo</h6>
                      <p>(0929) 0098 765</p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="phone"></i></a>
                      <a href=""><i data-feather="video"></i></a>
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar avatar-offline"><span class="avatar-initial rounded-circle bg-purple">g</span></div>
                    <div class="list-body">
                      <h6>George Patinos</h6>
                      <p>(0929) 0987 654</p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="phone"></i></a>
                      <a href=""><i data-feather="video"></i></a>
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar avatar-online"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>
                    <div class="list-body">
                      <h6>Daryl Anne Smith</h6>
                      <p>(0123) 4567 890</p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="phone"></i></a>
                      <a href=""><i data-feather="video"></i></a>
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                </ul>
              </div><!-- card-body -->
              <div class="card-footer bg-transparent">
                <a href="" class="link-03">View All Contacts (525) <i class="icon ion-android-arrow-forward"></i></a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-6 col-xl-4 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-event-two">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                <h6 class="card-title mg-b-0">Events This Month</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <ul class="list-unstyled media-list mg-b-0">
                  <li class="media">
                    <div class="media-left">
                      <label>Sat</label>
                      <p>03</p>
                    </div>
                    <div class="media-body event-panel-green">
                      <span class="event-time">8:00am - 10:30am</span>
                      <h6 class="event-title">Web Design Workshop</h6>
                    </div>
                  </li>
                  <li class="media">
                    <div class="media-left">
                      <label>Wed</label>
                      <p>07</p>
                    </div>
                    <div class="media-body event-panel-pink">
                      <span class="event-time">10:00 - 11:00am</span>
                      <h6 class="event-title">Personal Religous Event</h6>
                    </div>
                  </li>
                  <li class="media">
                    <div class="media-left">
                      <label>Thu</label>
                      <p>08</p>
                    </div>
                    <div class="media-body event-panel-primary">
                      <span class="event-time">1:00pm - 2:00am</span>
                      <h6 class="event-title">Batch 2012 Grand Reunion</h6>
                      <p class="event-desc">Duis aute irure dolor in repre hende rit i...</p>
                    </div>
                  </li>
                  <li class="media">
                    <div class="media-left">
                      <label>Mon</label>
                      <p>23</p>
                    </div>
                    <div class="media-body event-panel-orange">
                      <span class="event-time">1:00pm - 2:00am</span>
                      <h6 class="event-title">Front-End Wizard Meetup</h6>
                    </div>
                  </li>
                </ul>
              </div><!-- card-body -->
              <div class="card-footer bg-transparent">
                <a href="" class="link-03">Explore More Events <i class="icon ion-android-arrow-forward"></i></a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-6 col-xl-4 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-notification-one">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                <h6 class="card-title mg-b-0">Notifications</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-pink"><i data-feather="clock" class="svg-14"></i></span>
                    </div>
                    <div class="list-body">
                      <p class="mg-b-0">Add business hours to your <strong>Business Page</strong> so it's easy for people to plan a visit. <span>2 hours ago</span></p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-warning"><i data-feather="calendar" class="svg-16"></i></span>
                    </div>
                    <div class="list-body">
                      <p class="mg-b-0"><strong>Edsel Santillana</strong> invited you to join the event <strong>Annual Business Product Showcase</strong>. <span>Yesterday</span></p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-primary"><i data-feather="calendar" class="svg-16"></i></span>
                    </div>
                    <div class="list-body">
                      <p class="mg-b-0"><strong>Dyanne Aceron</strong> added some feedback to your event. <span>Yesterday</span></p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-blue"><i data-feather="shopping-bag" class="svg-16"></i></span>
                    </div>
                    <div class="list-body">
                      <p class="mg-b-0"><strong>Reynante Labares</strong> invited you to like his <strong>Online Shop</strong>. <span>Jul 31</span></p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                </ul>
              </div><!-- card-body -->
              <div class="card-footer bg-transparent">
                <a href="" class="link-03">Show All Notifications <i class="icon ion-android-arrow-forward"></i></a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- content-body -->
    </div><!-- content -->

<?= $this->include('layout/footer'); ?>