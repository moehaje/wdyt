<?php $title = 'Register — WDY' ?>

<?php ob_start() ?>

<main style="margin-left: auto; margin-right: auto; max-width: 32rem; padding: 1.5rem;">
    <h1 style="margin-bottom: 1.5rem; font-size: 1.875rem; font-weight: bold;">Register Team Admin</h1>
    <?php if (isset($errors) && !empty($errors)): ?>
        <div style="background-color: #fecaca; border: 1px solid #f87171; color: #7f1d1d; padding: 1rem; margin-bottom: 1rem; border-radius: 0.25rem;">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <form method="POST" action="/register">
        <div style="margin-bottom: 1rem;">
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: bold;" for="team_name">Team Name</label>
            <input style="width: 100%; padding-left: 0.75rem; padding-right: 0.75rem; padding-top: 0.5rem; padding-bottom: 0.5rem; border-width: 1px; border-radius: 0.25rem;" type="text" id="team_name" name="team_name" required>
        </div>
        <div style="margin-bottom: 1rem;">
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: bold;" for="username">Username</label>
            <input style="width: 100%; padding-left: 0.75rem; padding-right: 0.75rem; padding-top: 0.5rem; padding-bottom: 0.5rem; border-width: 1px; border-radius: 0.25rem;" type="text" id="username" name="username" required>
        </div>
        <div style="margin-bottom: 1rem;">
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: bold;" for="email">Email</label>
            <input style="width: 100%; padding-left: 0.75rem; padding-right: 0.75rem; padding-top: 0.5rem; padding-bottom: 0.5rem; border-width: 1px; border-radius: 0.25rem;" type="email" id="email" name="email" required>
        </div>
        <div style="margin-bottom: 1.5rem;">
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: bold;" for="password">Password</label>
            <input style="width: 100%; padding-left: 0.75rem; padding-right: 0.75rem; padding-top: 0.5rem; padding-bottom: 0.5rem; border-width: 1px; border-radius: 0.25rem;" type="password" id="password" name="password" required>
        </div>
        <button style="width: 100%; padding-left: 1rem; padding-right: 1rem; padding-top: 0.5rem; padding-bottom: 0.5rem; font-weight: bold; color: white; background-color: #3b82f6; border-radius: 0.25rem; cursor: pointer; text-align: center;" type="submit">
            Register
        </button>
    </form>
</main>

<?php $content = ob_get_clean() ?>

<?php require base_path('views/layouts/app.php') ?>