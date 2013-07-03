<section id="new" title="Create a new validator">
  <div class="page-header">
    <h1>Create a new validator</h1>
  </div>

    <p class="lead">Just override _isValid</p>

    <p>To create a new validator, inherit from the Base validator, or one of the bundled validators, and override the <code>_isValid</code> method. Note that <code>_isValid</code> must return a Result object.</p>

<div data-dojo-type="havok/widget/Accordion">
    <div title="Javascript AMD">
        <p>Javascript is not a strictly object oriented language. However Mystique gives the Base object class like behavior. To subclass Base, pass the <code>extend</code> function and object to be mixed into the Base prototype.</p>
<pre class="prettyprint linenums">
define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/Alpha

    return Base.extend({

        regex: /^[a-zA-Z]+$/,

        _isValid: function(value){

            var result = new Result({value: true});

            if ( ! this.regex.test(value)){
                result.set('value', false);
                result.addMessage('alpha');
            }

            return result;
        }
    });
});
</pre>
    </div>
    <div title="Javascript stand alone">
        <p>Javascript is not a strictly object oriented language. However Mystique gives the Base object class like behavior. To subclass Base, pass the <code>extend</code> function and object to be mixed into the Base prototype.</p>
<pre class="prettyprint linenums">
var Alpha = mystique.Base.extend({

    regex: /^[a-zA-Z]+$/,

    _isValid: function(value){

        var result = new mystique.Result({value: true});

        if ( ! this.regex.test(value)){
            result.set('value', false);
            result.addMessage('alpha');
        }

        return result;
    }
});
</pre>
    </div>
    <div title="PHP">
<pre class="prettyprint linenums">
namespace Zoop\Mystique;

class Alpha extends Base
{

    protected $regex = '/^[a-zA-Z]+$/';

    protected function _isValid($value){

        $result = new Result(["value" => true]);

        if ( ! preg_match($this->regex, $value)){
            $result->setValue(false);
            $result->addMessage('alpha');
        }

        return $result;
    }
}
</pre>
    </div>
</div>

</section>
