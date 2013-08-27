<section id="download-mystique" title="Download">
  <div class="page-header">
    <h1>Download</h1>
  </div>

    <p class="lead">Note: Mystique provides validators for several languages. However, to use the library you only need to be familiar with the language you intend to use.</p>

    <h2>Php</h2>

    <h3>With composer (recommended)</h3>

        <p>Add the following to your root <code>composer.json</code>:</p>
<pre class="prettyprint linenums">
"require": [
    "zoopcommerce/mystique-php": "~1.2"
]
</pre>

    <h2>Javascript</h2>

    <h2>Standalone</h2>

    <p>This is the simplest and fastest way to get started with Javascript. It is one single mimified Javascript file.</p>
    <p><a class="btn btn-large" href="https://raw.github.com/zoopcommerce/mystique-js/master/dist/mystique.js">Download mystique.js</a></p>

    <h2>Full sources with composer</h2>

        <p>Add the following to your root <code>composer.json</code>:</p>
<pre class="prettyprint linenums">
"require": [
    "zoopcommerce/mystique-js": "~1.2"
],
"extra": {"zoop-js-path": "public/js"}
</pre>

        <p>This will install the mystique sources in your vendor directory, and symlink them to <code>public/js</code>.</p>

    <h2>Full sources manual install</h2>

<pre class="prettyprint linenums">
git clone http://github.com/zoopcommerce/mystique-js mystique
git clone http://github.com/zoopcommerce/mystique mystique-common
</pre>
    
</section>
