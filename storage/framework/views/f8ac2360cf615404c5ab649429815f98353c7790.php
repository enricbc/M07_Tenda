<?php $__env->startSection('content'); ?>

  <div class="container mt-5">
      <div class="row mt-5">
        <div class="col-12 mt-5">
          <div class="row justtify-center mt-5">


          <div class="bg-white rounded px-5 pt-3 mr-auto ml-auto mt-5">
              <div class="panel panel-default pb-3">
                  <div class="panel-heading mt-0"><h2 id="title">Registre</h2></div>

                  <div class="panel-body">
                      <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                          <?php echo e(csrf_field()); ?>


                          <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                              <label for="name" class="col-md-4 control-label">Name</label>

                              <div class="col">
                                  <input id="name" type="text" class="form-control border-0 bg-light" style="height:60px;" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                  <?php if($errors->has('name')): ?>
                                      <span class="help-block">
                                          <strong><?php echo e($errors->first('name')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                              </div>
                          </div>

                          <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                              <div class="col">
                                  <input id="email" type="email" class="form-control border-0 bg-light" style="height:60px;"name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                  <?php if($errors->has('email')): ?>
                                      <span class="help-block">
                                          <strong><?php echo e($errors->first('email')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                              </div>
                          </div>

                          <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                              <label for="password" class="col-md-4 control-label">Password</label>

                              <div class="col">
                                  <input id="password" type="password" style="height:60px;" class="form-control border-0 bg-light" name="password" required>

                                  <?php if($errors->has('password')): ?>
                                      <span class="help-block">
                                          <strong><?php echo e($errors->first('password')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                              <div class="col">
                                  <input id="password-confirm" type="password" style="height:60px;" class="form-control border-0 bg-light" name="password_confirmation" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col btn-group">
                                <div class="row">
                                <div class="col mx-0">
                                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                                      Register
                                  </button>
                                </div>
                                <div class="col">
                                  <a id="shine" href="<?php echo e(url('auth/google')); ?>" class="btn btn-lg btn-danger btn-block">
                                      Login With Google
                                  </a>
                                </div>
                                </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
              </div>
          </div>
          </div>
      </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.loginlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>