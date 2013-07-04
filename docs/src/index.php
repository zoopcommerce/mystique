<?php ob_start()?>

<div class="jumbotron masthead">
  <div class="container">
    <h1>Mystique</h1>
    <p>A shape shifting validation library. Clean and simple validtation for both client and server.</p>
    <p>
      <a href="https://github.com/zoopcommerce/mystique/zipball/master" class="btn btn-primary btn-large">Download Mystique</a>
    </p>
    <ul class="masthead-links">
      <li>
        <a href="http://github.com/zoopcommerce/mystique">GitHub project</a>
      </li>
      <li>
        <a href="./getting-started.html#examples">Examples</a>
      </li>
      <li>
        <a href="./extend.html">Extend</a>
      </li>
      <li>
        Version 1.0.1
      </li>
    </ul>
  </div>
</div>

<div class="bs-docs-social">
  <div class="container">
    <ul class="bs-docs-social-buttons">
      <li>
        <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=zoopcommerce&repo=mystique&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe>
      </li>
      <li>
        <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=zoopcommerce&repo=mystique&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="102px" height="20px"></iframe>
      </li>
    </ul>
  </div>
</div>
<br />
<div class="container">

  <div class="marketing">

    <div class="row-fluid">
      <div class="span12 hero-unit">
        <h3>The problem</h3>
        <div class="lead">You want to validate user input on the client - it means a more responsive interface and saves wasted requests to your server.</div>
        <h4>but</h4>
        <div>You must also validate user input on your server, because data from the client can always be tampered with, accidentally or deliberately.</div>
        <h4>so</h4>
        <div>How do you simply validate the same data with the same result on both client and server?</div>
        <h4>introducing ...</h4>
        <h1>Mystique</h1>
        <p class="marketing-byline">Make validation simple.</p>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span4">
        <h2>Built by <a href="http://zoopcommerce.com">Zoop</a></h2>
        <p>Built at Zoop by <a href="http://github.com/superdweebie">@superdweebie</a> and <a href="http://github.com/crimsonronin">@crimsonronin</a> on the shoulders of giants. The docs borrow heavily from <a href="http://twitter.github.io/bootstrap/">bootstrap</a>, with widgets from <a href="http://zoopcommerce.github.io/havok">havok</a>. Javascript built for <a href="https://github.com/amdjs/amdjs-api/wiki/AMD">AMD</a>. Php built for version 5.4 with <a href="http://getcomposer.org">composer</a> support. Source managed through <a href="http://github.com">GitHub</a>.</p>
      </div>
      <div class="span4">
        <h2>Packed with features</h2>
        <p>Mystique comes with a lot in the box, over 20 foundational validators, and it keeps on growing.</p>
      </div>
      <div class="span4">
        <h2>Great docs</h2>
        <p>We know that weather you are a newbie solo dev, or a busy professional business, great docs are what you want and need. Docs make good code great.</p>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span12 hero-unit masthead">
          <a href="./getting-started.html" class="btn btn-primary btn-large">Lets get started ...</a>
      </div>
    </div>
</div>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';
?>
