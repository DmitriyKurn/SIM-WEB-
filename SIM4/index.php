<?php

$job = [
'job_name' => ['Биржа', 'Банк', 'Полиция'],
'job_data' => ['2021-настоящее время', '2002-2021', '1999-2002'],
'job_desc' => ['Много интересной работы', 'Различные службы', 'Правоохранительная деятельность']
]
?>

<div class="w3-container w3-card w3-white w3-margin-bottom">
<h2 class="w3-text-grey w3-padding-16"><i
class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
<div class="w3-container">
<h5 class="w3-opacity"><b>
<?php echo $job['job_name'][0]; ?>
</b></h5>
<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
<?php echo $job['job_data'][0]; ?>
</h6>
<p>
<?php echo $job['job_desc'][0]; ?>
</p>
<hr>
</div>
<div class="w3-container">
<h5 class="w3-opacity"><b>
<?php echo $job['job_name'][1]; ?>
</b></h5>
<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
<?php echo $job['job_data'][1]; ?>
</h6>
<p>
<?php echo $job['job_desc'][1]; ?>
</p>
<hr>
</div>
<div class="w3-container">
<h5 class="w3-opacity"><b>
<?php echo $job['job_name'][2]; ?>
</b></h5>
<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
<?php echo $job['job_data'][2]; ?>
</h6>
<p>
<?php echo $job['job_desc'][2]; ?>
</p><br>
</div>
</div>
