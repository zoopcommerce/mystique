define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/Boolean
    return Base.extend({
            // summary:
            //		Checks if a value is a boolean

        _isValid: function(value){

            var result = new Result({value: true});

            if(value !== true && value !== false){
                result.set('value', false);
                result.addMessage('boolean');
            }

            return result;
        }
    });
});
