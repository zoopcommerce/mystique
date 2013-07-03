define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/LessThan
    return Base.extend({

        compare: 0,

        _isValid: function(value){

            var result = new Result({value: true});

            if (!(value < this.compare)){
                result.set('value', false);
                result.addMessage(['lessThan', this.compare, value]);
            }

            return result;
        }
    });
});
