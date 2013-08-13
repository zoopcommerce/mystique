<section id="download-mystique" title="Download">
  <div class="page-header">
    <h1>Download</h1>
  </div>

    <p class="lead">Note: Mystique comes with validators for several languages. However, to use the library you only need to be familiar with the language you intend to use.</p>

    <div class="row-fluid">
      <div class="span12 hero-unit">
        <h2>Source with Composer</h2>
        <p>Get everything installed and ready to go!</p>
        <ul>
            <li>stand alone javascript</li>
            <li>javascript modules compatable with node, dojo, and other AMD loaders</li>
            <li>php source (modern php 5.4)</li>
        </ul>
        <p>Add the following to your root <code>composer.json</code>:</p>
<pre class="prettyprint linenums">
require: [
"zoopcommerce/mystique":
    "~1.0"
],
"extra": {
    "zoop-js-path": "public/js"
}
</pre>
    <p>Composer is the recommended method to a install. Using composer will install mystique in your <code>vendor</code> directory, make the php library available through the composer autoloaded, and also symlink the js library to be available in the directory set by <code>zoop-js-path</code>.</p>

      </div>
    </div>

    <div class="row-fluid">
      <div class="span6">
        <h2>Source from Github</h2>
        <p><a class="btn btn-large btn-primary" href="https://github.com/zoopcommerce/mystique/zipball/master" >Download Mystique source</a></p>
        <p>or gittish people:</p>
<pre class="prettyprint linenums">
git clone http://github.com/zoopcommerce/mystique
</pre>
      </div>
      <div class="span6">
        <h2>Stand alone Javascript</h2>
        <p>This is the simplest and fastest way to get started with Javascript. It is one single mimified Javascript file.</p>
        <p><a class="btn btn-large" href="https://raw.github.com/zoopcommerce/mystique/master/js/dist/mystique.js">Download mystique.js</a></p>
      </div>
    </div>

</section>
