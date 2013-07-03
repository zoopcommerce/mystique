<section id="chain" title="Chain">
  <div class="page-header">
    <h1>Chain</h1>
  </div>

    <p class="lead">A validator made from validators chained together.</p>

    <p>A Chain must act like a subclass of Base.</p>

    <p>Calling <code>isValid</code> on a Chain object must evaluate the validators in the <code>validators</code> property in order whilst respecting the <code>haltOnPass</code> <code>haltOnFail</code> <code>skipOnPass</code> <code>skipOnFail</code> properties of those validators.</p>

    <h2>Constructor</h2>
    <p>The constructor may take a single argument called <code>options</code>. Options should be an associative array of options to set Chain properties. <code>validators</code> property must be setable from this array.</p>

    <h2>Properties</h2>
    <h4>validators</h4>
    <p><code>Array</code>. An array of validators to evaluate in order.</p>

</section>
