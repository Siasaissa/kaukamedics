<h2>New Order Received</h2>

<p><strong>Customer:</strong> <?php echo e($order->name); ?></p>
<p><strong>Email:</strong> <?php echo e($order->email); ?></p>
<p><strong>Phone:</strong> <?php echo e($order->phone); ?></p>
<p><strong>City:</strong> <?php echo e($order->city); ?></p>
<p><strong>Address:</strong> <?php echo e($order->address); ?></p>
<p><strong>Payment Method:</strong> <?php echo e($order->payment_method); ?></p>

<h4>Order Details</h4>
<ul>
    <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($item['name']); ?> — <?php echo e($item['quantity']); ?> × Tsh <?php echo e(number_format($item['price'],2)); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<p><strong>Total:</strong> Tsh <?php echo e(number_format($order->total,2)); ?></p>
<p>Received at: <?php echo e($order->created_at->format('d M Y, H:i A')); ?></p>
<?php /**PATH /Users/dope/Downloads/public_html-6/resources/views/emails/order_placed.blade.php ENDPATH**/ ?>