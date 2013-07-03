<section id="async" title="Async">
  <div class="page-header">
    <h1>Async</h1>
  </div>

    <p>Client side validation may occasionally need to make a request to a server. Javascript validators support async returning of Result objects. Rather than returning a <code>boolean</code> value, a Result may return an object with a <code>then()</code> function which will be called when the async validation is complete. Eg:</p>

<pre class="prettyprint linenums">
var validator = new MyAsyncValidator,
    result = validator.isValid(myValue),
    value = result.get('value');

if (value.then){
    value.then(function(result){
        if (result.get('value')){
            //validator passed async
        } else {
            //validator failed async
        }
    });
} else if (value) {
    //validator passed syncronously
} else {
    //validator failed syncronously
}
</pre>

    <p>Note: if you are using dojo, this works well with the <code>dojo/promise</code> api and <code>dojo/Deferred</code>.</p>

</section>
