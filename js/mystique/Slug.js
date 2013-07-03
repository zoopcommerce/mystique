define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/Slug
    return Base.extend({

         regex: /^[a-z0-9-]+$/,

         min: 3,

         max: 255,

        _isValid: function(value){

            var result = new Result({value: true});

            if ( ! this.regex.test(value) || (!value.length) || (value.length < this.min) || (value.length > this.max)){
                result.set('value', false);
                result.addMessage(['slug', this.min, this.max]);
            }

            return result;
        }
    });
});
