<section id="<?php echo $view->sectionId;?>" title="<?php echo $view->sectionHeading;?>">

    <h2><?php echo $view->sectionHeading;?></h2>

  <?php echo $view->description;?>

<?php
if (isset($view->options) && count($view->options) > 0){
?>
<h4>Constructor options</h4>
<table class="table table-bordered table-striped">
  <thead>
   <tr>
     <th style="width: 100px;">Name</th>
     <th style="width: 50px;">type</th>
     <th style="width: 50px;">default</th>
     <th>description</th>
   </tr>
  </thead>
  <tbody>
<?php
    foreach($view->options as $option){
        echo "<tr>\n";
        echo "<td>$option->name</td>";
        echo "<td>$option->type</td>";
        echo "<td>$option->default</td>";
        echo "<td>$option->description</td>";
        echo "</tr>\n";
    }
?>
</tbody>
</table>
<?php
}
?>

<div data-dojo-type="havok/widget/Accordion">
    <div title="Javascript AMD">
    <?php
    if (isset($view->jsAMDComment)){
        echo $view->jsAMDComment;
    }
    ?>
<pre class="prettyprint linenums">
<?php echo $view->jsAMDExample;?>
</pre>
    </div>
    <div title="Javascript stand alone">
    <?php
    if (isset($view->jsStandAloneComment)){
        echo $view->jsStandAloneComment;
    }
    ?>
<pre class="prettyprint linenums">
<?php echo $view->jsStandAloneExample;?>
</pre>
    </div>
    <div title="PHP">
    <?php
    if (isset($view->phpComment)){
        echo $view->phpComment;
    }
    ?>
<pre class="prettyprint linenums">
<?php echo $view->phpExample;?>
</pre>
    </div>
</div>

</section>
