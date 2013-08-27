<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Zoop · Mystique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Tim Roediger">

    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">

    <?php
    if (isset($build) && $build == 'dist'){
    ?>
    <link rel="stylesheet" href="havokdocs.css">

    <!-- Placed at the start of the document so require is available for examples -->
    <script src="js/havokdocs.js"></script>
    <?php
    } else {
    ?>
    <!-- Placed at the start of the document so require is available for examples -->
    <script type="text/javascript">
        dojoConfig = {
            isDebug: true,
            locale: 'en-au',
            async: true,
            merge: [
                'havok/config'
            ],
            less: {
                "havok/vendor/bootstrap/less/buttons.less": {rank: 1},
                "havok/vendor/bootstrap/less/wells.less": {rank: 1},
                "havok/docs/src/less/docs.less": {rank: 4}
            }
        }
    </script>
    <script src="../../../dojo/dojo.js"></script>
    <?php
    }
    ?>
    <script type="text/javascript">
        require(['dojo/parser', 'dojo/domReady!'], function(parser){parser.parse()})
    </script>

  </head>

  <body onload="prettyPrint()">

  <div class="navbar navbar-inverse navbar-fixed-top" data-dojo-type="havok/widget/NavBar">
      <div class="container">
        <a data-dojo-attach-point="toggleNode">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="./index.html">Havok</a>
        <div data-dojo-attach-point="toggleTarget">
            <ul class="nav" data-dojo-type="havok/widget/NavBarLinks">
              <li class="">
                <a href="./index.html">Home</a>
              </li>
              <li class="">
                <a href="./getting-started.html">Get started</a>
              </li>
              <li class="">
                <a href="./javascript.html">Javascript</a>
              </li>
              <li class="">
                <a href="./php.html">PHP</a>
              </li>
              <li class="">
                <a href="./validators.html">Validators</a>
              </li>
              <li class="">
                <a href="./spec.html">Spec</a>
              </li>
              <li class="">
                <a href="./extend.html">Extend</a>
              </li>
            </ul>
        </div>
      </div>
  </div>

    <div id="contentWrapper" style="min-height: 1000px">
    <?php echo $content;?>
    </div>

    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p>Created by <a href="http://github.com/superdweebie">@superdweebie</a> and <a href="http://github.com/crimsonronin">@crimsonronin</a>.</p>
        <p>Code licensed under MIT.</p>
        <p>Built on the shoulders of giants <a href="http://twitter.github.io/bootstrap">bootstrap</a> and <a href="http://dojotoolkit.org">dojo</a>.</p>
        <ul class="footer-links">
          <li><a href="http://zoopcommerce.com">Zoop</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/zoopcommerce/mystique/issues?state=open">Issues</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/zoopcommerce/mystique/blob/master/CHANGELOG.md">Changelog</a></li>
        </ul>
      </div>
    </footer>

    <script src="js/google-code-prettify/prettify.js"></script>
  </body>
</html>
