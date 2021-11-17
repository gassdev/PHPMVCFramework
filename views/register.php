<h1>Create an account</h1>
<?php $form = \app\core\form\Form::begin('', 'post'); ?>
  <div class="row">
    <div class="col-md-6">
      <?= $form->field($model, 'firstname') ?>
    </div>
    <div class="col-md-6">
      <?= $form->field($model, 'lastname') ?>
    </div>
  </div>
  <?= $form->field($model, 'email') ?>
  <?= $form->field($model, 'password')->passwordField() ?>
  <?= $form->field($model, 'confirmPassword')->passwordField() ?>

  <button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end(); ?>
