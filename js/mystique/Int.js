define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/Int
    return Base.extend({
            // summary:
            //		Checks if a value is an integer or can be cast into an integer

        _isValid: function(value){

            var result = new Result({value: true});

            if(((parseFloat(value) != parseInt(value)) || isNaN(value))){
                result.set('value', false);
                result.addMessage('int');
            }

            return result;
        }
    });
});
