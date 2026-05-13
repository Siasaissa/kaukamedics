<section class="mb-5">
    <header class="mb-4">
        <h4 class="fw-bold text-primary mb-2">
            <?php echo e(__('Update Password')); ?>

        </h4>
        <p class="text-muted small mb-0">
            <?php echo e(__('Ensure your account is using a long, random password to stay secure.')); ?>

        </p>
    </header>

    <form method="post" action="<?php echo e(route('password.update')); ?>" class="p-4 bg-light border rounded-4 shadow-sm">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <!-- Current Password -->
        <div class="mb-3">
            <label for="update_password_current_password" class="form-label fw-semibold">
                <?php echo e(__('Current Password')); ?>

            </label>
            <input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="form-control <?php $__errorArgs = ['current_password', 'updatePassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                autocomplete="current-password">
            <?php $__errorArgs = ['current_password', 'updatePassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- New Password -->
        <div class="mb-3">
            <label for="update_password_password" class="form-label fw-semibold">
                <?php echo e(__('New Password')); ?>

            </label>
            <input
                id="update_password_password"
                name="password"
                type="password"
                class="form-control <?php $__errorArgs = ['password', 'updatePassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                autocomplete="new-password">
            <?php $__errorArgs = ['password', 'updatePassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="update_password_password_confirmation" class="form-label fw-semibold">
                <?php echo e(__('Confirm Password')); ?>

            </label>
            <input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="form-control <?php $__errorArgs = ['password_confirmation', 'updatePassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                autocomplete="new-password">
            <?php $__errorArgs = ['password_confirmation', 'updatePassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Save Button -->
        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-shield-lock-fill me-2"></i> <?php echo e(__('Save Password')); ?>

            </button>

            <?php if(session('status') === 'password-updated'): ?>
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-success small m-0">
                    <i class="bi bi-check-circle me-1"></i> <?php echo e(__('Saved.')); ?>

                </p>
            <?php endif; ?>
        </div>
    </form>
</section>
<?php /**PATH /Users/dope/Downloads/public_html-6/resources/views/profile/partials/update-password-form.blade.php ENDPATH**/ ?>