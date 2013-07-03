define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/NotEqual
    return Base.extend({

        compare: 0,

        _isValid: function(value){

            var result = new Result({value: true});

            if ((!(value !== this.compare && !(value instanceof Date))) &&
                !(value instanceof Date && this.compare instanceof Date && value.toUTCString() != this.compare.toUTCString())
            ){
                result.set('value', false);
                result.addMessage(['equal', this.compare, value]);
            }

            return result;
        }
    });
});
