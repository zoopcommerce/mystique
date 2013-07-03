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
