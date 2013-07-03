<section id="base" title="Base">
  <div class="page-header">
    <h1>Base</h1>
  </div>

    <p class="lead">The foundation object for all validators</p>

    <p>The base object must act like an abstract class.</p>

    <h2>Constructor</h2>
    <p>The constructor may take a single argument called <code>options</code>. Options should be an associative array of options to configure the validator.</p>

    <h2>Methods</h2>
    <p>Base must have the following methods:</p>

    <h4>public isValid(value)</h4>
    <p>This method requests the validation of <code>value</code>. It must return a <code>Result</code> object.</p>

    <h4>protected _isValid(value)</h4>
    <p>This method is the extension point for inheriting validators to place custom validation logic.</p>

    <h2>Properties</h2>
    <h4>haltOnPass</h4>
    <p><code>Boolean</code>. Controls validator behaviour when part of a <code>Chain</code>. Setting to true will stop any Validators after this one in the Chain from executing if this validator passes.</p>

    <h4>haltOnFail</h4>
    <p><code>Boolean</code>. Controls validator behaviour when part of a <code>Chain</code>. Setting to true will stop any Validators after this one in the Chain from executing if this validator fails.</p>

    <h4>skipOnPass</h4>
    <p><code>Boolean</code>. Controls validator behaviour when part of a <code>Chain</code>. Setting to true will skip evaluating this validator, if all previous validators have passed.</p>

    <h4>skipOnFail</h4>
    <p><code>Boolean</code>. Controls validator behaviour when part of a <code>Chain</code>. Setting to true will skip evaluating this validator, if any previous validator has failed.</p>

</section>
