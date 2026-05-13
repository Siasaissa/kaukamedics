<section class="mb-5">
    <header class="mb-4">
        <h4 class="fw-bold text-primary mb-2">
            <?php echo e(__('Profile Information')); ?>

        </h4>
        <p class="text-muted small mb-0">
            <?php echo e(__("Update your account's profile information and email address.")); ?>

        </p>
    </header>

    <!-- Email Verification Form -->
    <form id="send-verification" method="post" action="<?php echo e(route('verification.send')); ?>">
        <?php echo csrf_field(); ?>
    </form>

    <!-- Update Profile Form -->
    <form method="post" action="<?php echo e(route('profile.update')); ?>" class="p-4 bg-light border rounded-4 shadow-sm">
        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label fw-semibold"><?php echo e(__('Full Name')); ?></label>
            <input
                id="name"
                name="name"
                type="text"
                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('name', $user->name)); ?>"
                required
                autofocus
                autocomplete="name">
            <?php $__errorArgs = ['name'];
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

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label fw-semibold"><?php echo e(__('Email Address')); ?></label>
            <input
                id="email"
                name="email"
                type="email"
                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('email', $user->email)); ?>"
                required
                autocomplete="username">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <?php if($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail()): ?>
                <div class="alert alert-warning mt-3 p-2 small" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    <?php echo e(__('Your email address is unverified.')); ?>

                    <button form="send-verification" class="btn btn-link btn-sm text-primary text-decoration-none">
                        <?php echo e(__('Click here to re-send the verification email.')); ?>

                    </button>

                    <?php if(session('status') === 'verification-link-sent'): ?>
                        <p class="text-success mt-2 small">
                            <?php echo e(__('A new verification link has been sent to your email address.')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Save Button -->
        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-save me-2"></i> <?php echo e(__('Save Changes')); ?>

            </button>

            <?php if(session('status') === 'profile-updated'): ?>
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
<?php /**PATH /Users/dope/Downloads/public_html-6/resources/views/profile/partials/update-profile-information-form.blade.php ENDPATH**/ ?>