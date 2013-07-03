<section id="install" title="Use">
  <div class="page-header">
    <h1>Use</h1>
  </div>

    <h2>Validators</h2>
    <p>To use a validator, first create an instance. Any options can be passed to the constructor in an object:</p>

<pre class="prettyprint linenums">
require(['mystique/Length'], function(Length){
    var validator = new Length({min: 4, max: 50});
});
</pre>

    <p>Then call <code>isValid</code> to test a value</p>
<pre class="prettyprint linenums">
var result = validator.isValid('123456');
</pre>

    <p>The returned Result object contains the validation result:</p>
<pre class="prettyprint linenums">
if ( ! result.get('value')){
    //validation failed
} else {
    //validation passed
}
</pre>

    <p>The returned Result object may also contain an array of validation messages:</p>
<pre class="prettyprint linenums">
alert(result.get('messages').join(' ')); //display any messages
</pre>

    <h2>Chains</h2>

    <p>Chains can be used to string validators together. Eg:<p>
<pre class="prettyprint linenums">
var validator = new Chain({'validators': [
        new Alpha,
        new Length({'min': 5, 'max': 10})
    ]});
</pre>
</section>