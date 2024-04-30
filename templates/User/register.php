<?php
/**
 * @var \App\View\AppView $this
 */

$this->layout = 'CakeLte.login';
?>

<div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg"><?= __('Silahkan Registrasi Buat Untuk Akun Baru') ?></p>

        <?= $this->Form->create() ?>

        <?= $this->Form->control('username', [
            'placeholder' => __('Username'),
            'label' => false,
            'append' => '<i class="fas fa-user"></i>',
        ]) ?>

        <?= $this->Form->control('password', [
            'placeholder' => __('Password'),
            'label' => false,
            'append' => '<i class="fas fa-lock"></i>',
        ]) ?>

        <?= $this->Form->control('email', [
            'placeholder' => __('Email'),
            'label' => false,
            'append' => '<i class="fas fa-envelope"></i>',
        ]) ?>

        <?= $this->Form->control('nama_lengkap', [
            'placeholder' => __('Nama Lengkap'),
            'label' => false,
            'append' => '<i class="fas fa-user"></i>',
        ]) ?>

        <?= $this->Form->control('alamat', [  
            'placeholder' => __('Alamat'),
            'label' => false,
            'append' => '<i class="fas fa-addres"></i>',
        ]) ?>
        <div class="row">

            <div class="col-4">
                <?= $this->Form->control(__('Registrasi'), [
                    'type' => 'submit',
                    'class' => 'btn btn-primary btn-block',
                ]) ?>
            </div>
        </div>

        <?= $this->Form->end() ?>

        <?= $this->Html->link(__('Saya Sudah Memiliki Akun'), ['action' => 'login']) ?>
    </div>
    <!-- /.register-card-body -->
</div>