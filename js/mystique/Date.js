define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/Date
    return Base.extend({

        _isValid: function(value){

            var result = new Result({value: true});

            if (!(value instanceof Date)){
                result.set('value', false);
                result.addMessage('date');
            }

            return result;
        }
    });
});
