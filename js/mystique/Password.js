define([
    'mystique/Base',
    'mystique/Length',
    'mystique/Result'
],
function(
    Base,
    Length,
    Result
){
    // module:
    //		mystique/Alpha
    return Base.extend({

        length: new Length({min: 6, max: 40}),

        containAlphaRegEx: /[a-zA-Z]/,

        containNumRegEx: /[0-9]/,

        _isValid: function(value){

            var result = new Result({value: true});

            if ( ! this.length.isValid(value).value){
                result.set('value', false);
                result.addMessage('passwordLength');
            }

            if ( ! this.containAlphaRegEx.test(value)){
                result.set('value', false);
                result.addMessage('passwordAlpha');
            }

            if ( ! this.containNumRegEx.test(value)){
                result.set('value', false);
                result.addMessage('passwordNum');
            }

            return result;
        }
    });
});
