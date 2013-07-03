define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/String
    return Base.extend({
            // summary:
            //		Checks if a value is a string

        _isValid: function(value){

            var result = new Result({value: true});

            if(typeof value != 'string'){
                result.set('value', false);
                result.addMessage('string');
            }

            return result;
        }
    });
});
