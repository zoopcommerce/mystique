define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/HexColor
    return Base.extend({

        regex: /^#[0-9A-F]{6,6}$/,

        _isValid: function(value){

            var result = new Result({value: true});

            if ( ! this.regex.test(value)){
                result.set('value', false);
                result.addMessage('hexColor');
            }

            return result;
        }
    });
});
