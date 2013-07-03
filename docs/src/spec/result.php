<section id="result" title="Result">
  <div class="page-header">
    <h1>Result</h1>
  </div>

    <p class="lead">The object returned by all validators</p>

    <h2>Constructor</h2>
    <p>The constructor may take a single argument called <code>options</code>. Options should be an associative array of options to set Result properties. <code>value</code> and <code>messages</code> properties must be setable from this array</p>

    <h2>Methods</h2>
    <p>Result must have the following methods:</p>

    <h4>public addMessage(message)</h4>
    <p>Adds a message to the messages array. The message may be a string or array.</p>

    <h2>Properties</h2>
    <h4>value</h4>
    <p><code>Boolean</code>. The outcome of the validation, ture or false.</p>

    <h4>messages</h4>
    <p><code>Array</code>. Any messages. If localization support is available, these messages should be localized.</p>
</section>
