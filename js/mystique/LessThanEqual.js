define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/LessThanEqual
    return Base.extend({

        compare: 0,

        _isValid: function(value){

            var result = new Result({value: true});

            if (!(value <= this.compare)){
                result.set('value', false);
                result.addMessage(['lessThanEqual', this.compare, value]);
            }

            return result;
        }
    });
});
