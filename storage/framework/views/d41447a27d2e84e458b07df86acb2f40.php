<?php $__env->startComponent('mail::message'); ?>
# Thank You, <?php echo e($contact->name); ?>!

We appreciate you reaching out to us. Our team will review your message and get back to you as soon as possible.

---

**Your Message:**  
<?php echo e($contact->message); ?>


Thank you for your time!  
**[Your Company Name]**

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\personal_portfolio\resources\views/email/thankyou.blade.php ENDPATH**/ ?>