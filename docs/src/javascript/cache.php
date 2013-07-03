<section id="cache" title="Cache">
  <div class="page-header">
    <h1>Cache</h1>
  </div>

    <p>Validation can be expensive and repetitive on the client, so javascript validators have a validation cache. If the cache is enabled, if the same value is validated more than once, the result will be retrieved from the cache.</p>

    <h2>Properties</h2>
    <h3>useCache</h3>
    <p><code>Boolean</code>. Defaults to true. Turns cache use on and off. For example, this Alpha validator has the cache turned off:</p>

<pre class="prettyprint linenums">
var validator = new Alpha({useCache: false});
</pre>

    <h3>maxCacheSize</h3>
    <p><code>Int</code>. Defaults to 50. Defines the maximum cache size. Eg:</p>

<pre class="prettyprint linenums">
var validator = new Alpha({maxCacheSize: 10});
</pre>

</section>
