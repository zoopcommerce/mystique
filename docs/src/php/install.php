<section id="install" title="Install">
  <div class="page-header">
    <h1>Install</h1>
  </div>

    <p>Mystique requires php 5.4 or higher</p>

    <h2>Composer (recommended)</h2>

    <p>Add the following to your root <code>composer.json</code>:</p>
<pre class="prettyprint linenums">
require: [
"zoopcommerce/mystique":
    "~1.0"
]
</pre>

    <p>This will automatically install and update minor versions whenever you use <code>composer update</code>. Composer will also set up autoloading.</p>


    <h2>Without Composer</h2>

    <p>Place the mystique source somewhere in your project. Set up autoloading for the <code>./php/lib/Zoop</code> directory. Mystique is <code>PSR0</code> compliant for easy autoloading.</p>

</section>
