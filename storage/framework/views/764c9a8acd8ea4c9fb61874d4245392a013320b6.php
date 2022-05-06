
<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body border = "1">
  <h1><center> ADMIN DASHBOARD </center></H1>
<table border = "1" style="margin:0px;padding:15px">
<tr>
<td>Where did you hear about us</td>
<td>First Name </td>
<td>Middle Name</td>
<td>Last Name</td>
<td>Relationship with child</td>
<td>Occupation</td>
<td>Company Name</td>
<td>Contact Mobile Phone</td>
<td>Contact Email Address</td>
<td>Home Phone</td>
<td>Other Phone Number if any</td>
<td>Full Name</td>
<td>Gender</td>
<td>Date of Birth</td>
<td>Age
</td>
<td>Nationality</td>
<td>Primary Language</td>
<td>Secondary Language</td>
<td>Previous School Name</td>
<td>Current Grade</td>
<td>Enrolment Year</td>
<td>Grade to which seeking admission</td>

</tr>
<?php $__currentLoopData = $registerusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>

<td><?php echo e($user->where_did_you_hear_about_us); ?></td>
<td><?php echo e($user->parent_first_name); ?></td>
<td><?php echo e($user->parent_middle_name); ?></td>
<td><?php echo e($user->parent_last_named); ?></td>
<td><?php echo e($user->relationship_with_the_child); ?></td>
<td><?php echo e($user->occupation); ?></td>
<td><?php echo e($user->company_name); ?></td>
<td><?php echo e($user->moblie_no); ?></td>
<td><?php echo e($user->email); ?></td>
<td><?php echo e($user->home_phone); ?></td>
<td><?php echo e($user->other_phone_number); ?></td>
<td><?php echo e($user->child_full_name); ?></td>
<td><?php echo e($user->gender); ?></td>
<td><?php echo e($user->date_of_birth); ?></td>
<td><?php echo e($user->age); ?></td>
<td><?php echo e($user->nationality); ?></td>
<td><?php echo e($user->primary_language); ?></td>
<td><?php echo e($user->secondary_language); ?></td>
<td><?php echo e($user->pervious_school_name); ?></td>
<td><?php echo e($user->current_grade); ?></td>
<td><?php echo e($user->enrolment_year); ?></td>
<td><?php echo e($user->grade_to_which_seeking_admission); ?></td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\demo-site\resources\views/dashboard.blade.php ENDPATH**/ ?>