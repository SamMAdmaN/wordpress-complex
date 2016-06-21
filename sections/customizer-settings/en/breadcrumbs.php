
<h3>Breadcrumbs</h3>
<p>Here you can set up site breadcrumbs.</p>

<!--
<figure class="img-polaroid">
    <img src="img/tm/customizer/.png" alt="" >
</figure>
-->
<?PHP if($project == 'bedentist' or $project == 'pristine' or $project == 'samson') : ?>
<h5>Show full/minified breadcrumbs path</h5>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Full</dt>
            <dd>
                Full breadcrumbs display mode
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Minified</dt>
            <dd>
                Minified breadcrumbs display mode
            </dd>
        </dl>
    </li>
</ul>
<?PHP endif; ?>


<?php if ($project != 'bettaso' ) { ?>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enable page title in breadcrumbs area</dt>
            <dd>
                Show page title in breadcrumbs area
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enable Breadcrumbs</dt>
            <dd>
                Show / Hide breadcrumbs
            </dd>
        </dl>
    </li>
<?php } ?>

<?php if ($project == 'neurion' or $project == 'waylard' ) { ?>
    <li>
        <dl class="inline-term">
            <dt>Enable page title in breadcrumbs area</dt>
            <dd>
                Show page title in breadcrumbs area
            </dd>
        </dl>
    </li>
<?php } ?>

<?php if ($project == 'bedentist' or $project == 'pristine'  or $project == 'samson' or $project == 'ironmass') { ?>
    <li>
        <dl class="inline-term">
            <dt>Enable Breadcrumbs on front page </dt>
            <dd>
                Enable/disable breadcrumbs on front page
            </dd>
        </dl>
    </li>
<?php } ?>
</ul>

<?php if ($project == 'bettaso' ) { ?>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enable Breadcrumbs</dt>
            <dd>
                Show / Hide breadcrumbs
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enable Breadcrumbs on front page </dt>
            <dd>
                Enable/disable breadcrumbs on front page
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enable page title in breadcrumbs area</dt>
            <dd>
                Show page title in breadcrumbs area
            </dd>
        </dl>
    </li>
</ul>    
<?php } ?>
<?php if ($project != 'bedentist' && $project != 'pristine' && $project != 'samson'){ ?>
<div> 

<h5>Show full/minified breadcrumbs path</h5>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Full</dt>
            <dd>
                Full breadcrumbs display mode
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Minified</dt>
            <dd>
                Minified breadcrumbs display mode
            </dd>
        </dl>
    </li>
</ul>
</div>
<?php } ?>

