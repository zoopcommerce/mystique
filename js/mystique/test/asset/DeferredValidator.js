define([
    'dojo/_base/lang',
    'dojo/Deferred',
    'mystique/Base',
    'mystique/Result'
],
function(
    lang,
    Deferred,
    Base,
    Result
){
    // module:
    //		mystique/test/asset/DeferredValidator
    return Base.extend({

        timeout: 1000,

        _isValid: function(value){

            var resultDeferred = new Deferred;

            // Delay the validation result to simulate server response time
            setTimeout(lang.hitch(this, function(){
                if (value == 'awesome'){
                    resultDeferred.resolve(new Result({value: true}));
                } else {
                    resultDeferred.resolve(new Result({value: false, messages: ['value must be awesome']}));
                }
            }), this.timeout);

            return new Result({value: resultDeferred, messages: ['...is validating']});
        }
    });
});