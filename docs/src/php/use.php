<section id="install" title="Use">
  <div class="page-header">
    <h1>Use</h1>
  </div>

    <h2>Validators</h2>
    <p>To use a validator, first create an instance. Any options can be passed to the constructor in an associative array:</p>

<pre class="prettyprint linenums">
$validator = new Zoop/Mystique/Length(['min' => 4, 'max' => 50]);
</pre>

    <p>Then call <code>isValid</code> to test a value</p>
<pre class="prettyprint linenums">
$result = $validator->isValid('123456');
</pre>

    <p>The returned Result object contains the validation result:</p>
<pre class="prettyprint linenums">
if ( ! $result->getValue()){
    //validation failed
} else {
    //validation passed
}
</pre>

    <p>The returned Result object may also contain an array of validation messages:</p>
<pre class="prettyprint linenums">
echo implode(' ', $result->getMessages()); //display any messages
</pre>

    <h2>Chains</h2>

    <p>Chains can be used to string validators together. Eg:<p>
<pre class="prettyprint linenums">
$validator = new Zoop/Mystique/Chain(['validators' => [
        new Zoop/Mystique/Alpha,
        new Zoop/Mystique/Length(['min' => 4, 'max' => 50])
    ]]);
</pre>
</section>