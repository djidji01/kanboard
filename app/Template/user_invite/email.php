<p>
    <?= t('You have been invited to register on CHUB Lab IP management system.') ?>
</p>

<p>
    <?= $this->url->absoluteLink(t('Click here to join the lab team'), 'UserInviteController', 'signup', array('token' => $token)) ?>
</p>

<?php if ($this->app->config('application_url')): ?>
    <hr>
    <a href="<?= $this->app->config('application_url') ?>">CHUB Lab IP management system</a>
<?php endif ?>
