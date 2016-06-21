
<h3>Site Identity</h3>
<p>Here you can setup site identity</p>


<h5>Site title</h5>

<p>Your website title goes here</p>


<h5>Tagline</h5>

<p>This a short statement similar to a subtitle or advertising slogan</p>


<h5>Show tagline after logo</h5>

<p>This property specifies whether to  show or hide tagline after logo</p>


<?php if ($project != 'ironmass' && $project !='bettaso') { ?>
<h5>Enable toTop button</h5>
<?php } ?>
<?php if ($project == 'ironmass' or $project == 'bettaso') { ?>
<h5>Show toTop button</h5>
<?php } ?>
<p>This property specifies whether to enable or disable topTop button</p>

<?php if ($project == 'wildride' OR $project == 'weeklyjournal' OR $project == 'cosmetro' OR $project == 'sketchfield' OR $project == 'clubstome'  OR $project == 'bedentist' OR $project == 'pristine' OR $project == 'samson') { ?>

<h5> Show preloader when open a page </h5>

<p>This property specifies whether to show placeholder or not</p>

<?php } ?>

<?php if ($project == 'waylard' or $project == 'ironmass' or $project == 'bettaso') { ?>

<h5> Show page preloader </h5>

<p>This property specifies whether to show placeholder or not</p>

<?php } ?>