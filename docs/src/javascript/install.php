<section id="install" title="Install">
  <div class="page-header">
    <h1>Install</h1>
  </div>

    <h2>AMD</h2>
    <p>If using an AMD loader, move the <code>./js/mystique</code> folder from the downloaded source into a location where your AMD loader can access the files. You may also need to configure your AMD loader to know where the Mystique package is.</p>
    <h4>Dojo example</h4>
    <p>Using the dojo AMD loader, place <code>./js/mystique</code> in the same folder as your dojo packages:</p>
<pre>
./
├── dojo/
├── dijit/
└── mystique/
</pre>

    <p>You will then be able to use <code>require</code> to load any Mystique module. Eg:</p>
<pre class="prettyprint linenums">
require(['mystique/Alpha'], function(Alpha){
    var validator = new Alpha;
});
</pre>

    <h2>Stand alone</h2>
    <p>If you are using the stand alone <code>mystique.js</code> simply add that script to your page:</p>
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot; src=&quot;mypath/mystique.js&quot;&gt;&lt;/script&gt;
</pre>

    <p>You will then be able to use the <code>mystique</code> global variable to use any Mystique module. Eg:</p>
<pre class="prettyprint linenums">
var validator = new mystique.Alpha;
</pre>

</section>
