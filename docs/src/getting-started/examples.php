<section id="examples" title="Examples">
  <div class="page-header">
    <h1>Examples</h1>
  </div>

    <h2>Bundled Validators</h2>
  <p class="lead">Use the many validators already bundled with mystique.</p>

  <p>This example will check if <code>myValue</code> contains only alpha characters, and display a message if it does not.</p>

<div data-dojo-type="havok/widget/Accordion">
    <div title="Javascript AMD">
<pre class="prettyprint linenums">
require(['mystique/Alpha'], function(Alpha){
    var validator = new Alpha,
        result = validator.isValid(myValue);

    if (!result.get('value')){
        alert(result.get('messages').join(' ');
    }
})
</pre>
    </div>
    <div title="Javascript stand alone">
<pre class="prettyprint linenums">
var validator = new mystique.Alpha,
    result = validator.isValid(myValue);

if (!result.get('value')){
    alert(result.get('messages').join(' ');
}
</pre>
    </div>
    <div title="PHP">
<pre class="prettyprint linenums">
$validator = new Zoop\Mystique\Alpha;
$result = $validator->isValid($myValue);

if (!$result->getValue()){
    echo implode(' ', $result->getMessages());
}
</pre>
    </div>
</div>

    <h2>Chains</h2>
  <p class="lead">Create complex validators by chaining simpler ones together.</p>
  <p>This example will create a validator chain that first checks for alpha characters, and then checks string length.</p>

<div data-dojo-type="havok/widget/Accordion">
    <div title="Javascript AMD">
<pre class="prettyprint linenums">
require(['mystique/Alpha', 'mystique/Length', 'mystique/Chain'], function(Alpha, Length, Chain){
    var validator = new Chain({'validators': [
            new Alpha,
            new Length({'min': 5, 'max': 10})
        ]}),
        result = validator.isValid(myValue);
})
</pre>
    </div>
    <div title="Javascript stand alone">
<pre class="prettyprint linenums">
var validator = new mystique.Chain({'validators': [
        new mystique.Alpha,
        new mystique.Length({'min': 5, 'max': 10})
    ]}),
    result = validator.isValid(myValue);
</pre>
    </div>
    <div title="PHP">
<pre class="prettyprint linenums">
$validator = new Zoop\Mystique\Chain(['validators' => [
    new Zoop\Mystique\Alpha,
    new Zoop\Mystique\Length('min' => 5, 'max' => 10)
]]);
$result = $validator->isValid($myValue);
</pre>
    </div>
</div>

</section>

