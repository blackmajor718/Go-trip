<div class="form-section mt-40">
    <h3 class="text-22 fw-500 mb-20"><?php echo e(__("How do you want to pay?")); ?></h3>
    <div class="accordion -simple row y-gap-20 pt-30 js-accordion">
        <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 accordion__item px-20">
                <div class="border-light rounded-4 py-20">
                    <div class="accordion__button d-flex items-center">
                        <!-- Making the label clickable to select the radio button -->
                        <label class="d-flex items-center" for="radio_gateway_<?php echo e($k); ?>" style="width: 100%; cursor: pointer;">
                            <input type="radio" name="payment_gateway" id="radio_gateway_<?php echo e($k); ?>" value="<?php echo e($k); ?>" onclick="event.stopPropagation();" style="margin-right: 10px;">
                            <?php if($logo = $gateway->getDisplayLogo()): ?>
                                <img src="<?php echo e($logo); ?>" alt="<?php echo e($gateway->getDisplayName()); ?>">
                            <?php endif; ?>
                            <span class="shrink-0 ml-20"><?php echo e($gateway->getDisplayName()); ?></span>
                        </label>
                    </div>
                    <div id="content_gateway_<?php echo e($k); ?>" class="accordion__content collapse" aria-labelledby="radio_gateway_<?php echo e($k); ?>" data-parent=".js-accordion">
                        <div class="pt-20 pl-60">
                            <div class="gateway_name">
                                <?php echo $gateway->getDisplayName(); ?>

                            </div>
                            <?php echo $gateway->getDisplayHtml(); ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.accordion__item');

    accordionItems.forEach(item => {
        const label = item.querySelector('.accordion__button label');
        const content = item.querySelector('.accordion__content');

        label.addEventListener('click', function (e) {
            // Prevent label click from closing the radio button selection
            e.stopPropagation();
            // Toggle the selected accordion item
            content.classList.toggle('show');

            // Collapse other open items
            accordionItems.forEach(i => {
                const otherContent = i.querySelector('.accordion__content');
                if (otherContent !== content) {
                    otherContent.classList.remove('show');
                }
            });
        });
    });
});
</script>
<?php /**PATH C:\xampp\htdocs\Project\themes/GoTrip/Booking/Views/frontend/booking/checkout-payment.blade.php ENDPATH**/ ?>