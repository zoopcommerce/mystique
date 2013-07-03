define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/Float
    return Base.extend({

        _isValid: function(value){

            var result = new Result({value: true});

            if (( !(parseFloat(value) || parseInt(value) === 0) || isNaN(value))){
                result.set('value', false);
                result.addMessage('float');
            }

            return result;
        }
    });
});
