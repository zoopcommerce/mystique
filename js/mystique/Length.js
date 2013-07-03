define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/Length
    return Base.extend({

        min: 0,

        max: 255,

        _isValid: function(value){

            var result = new Result({value: true});

            value = '' + value; //cast to string
            
            if ( (!value.length) || (value.length < this.min) || (value.length > this.max)){
                result.set('value', false);
                result.addMessage(['length', this.min, this.max]);
            }

            return result;
        }
    });
});