<?php ob_start()?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Validators</h1>
    <p class="lead">Dozens of reusable validators for server, client or both.</p>
  </div>
</header>


  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul data-dojo-type="havok/widget/ListNav"
            data-dojo-mixins="havok/widget/_AffixMixin, havok/widget/_ScrollSpyMixin"
            data-dojo-props="
               linkTemplate: '&lt;a role=&quot;navitem&quot; href=&quot;${href}&quot;&gt;&lt;i class=&quot;icon-chevron-right&quot;&gt;&lt;/i&gt; ${label}&lt;/a&gt;',
               affixOffset: {top: 40, bottom: 0},
               affixTarget: 'mainContent',
               spyTarget: 'mainContent'
            "
            class="nav-stacked bs-docs-sidenav"
        >
        </ul>
      </div>
      <div class="span9" id="mainContent">

        <section id="comparison" title="Comparision Validators">
            <div class="page-header">
              <h1>Comparison Validators</h1>
            </div>
        <?php
            include 'validators/equal.php';
            include 'validators/greater-than.php';
            include 'validators/greater-than-equal.php';
            include 'validators/less-than.php';
            include 'validators/less-than-equal.php';
            include 'validators/not-equal.php';
        ?>
        </section>
        <section id="credit-card-validators" title="Credit Card Validators">
            <div class="page-header">
              <h1>Credit Card Validators</h1>
            </div>
        <?php
            include 'validators/credit-card.php';
            include 'validators/credit-card-expiry.php';
            include 'validators/cvv.php';
        ?>
        </section>
        <section id="chain-helper" title="Chain Helper Validators">
            <div class="page-header">
              <h1>Chain Helper Validators</h1>
            </div>
        <?php
            include 'validators/chain.php';
            include 'validators/required.php';
            include 'validators/not-required.php';
        ?>
        </section>
        <section id="datatype" title="Datatype Validators">
            <div class="page-header">
              <h1>Datatype Validators</h1>
            </div>
        <?php
            include 'validators/boolean.php';
            include 'validators/float.php';
            include 'validators/int.php';
            include 'validators/date.php';
            include 'validators/string.php';
        ?>
        </section>
        <section id="other" title="Other Validators">
            <div class="page-header">
              <h1>Other Validators</h1>
            </div>
        <?php
            include 'validators/alpha.php';
            include 'validators/email.php';
            include 'validators/hex-color.php';
            include 'validators/length.php';
            include 'validators/regex.php';
            include 'validators/password.php';
            include 'validators/slug.php';
        ?>
        </section>
      </div>
    </div>
  </div>
<?php
$content = ob_get_clean();
include 'layout.php';
?>
