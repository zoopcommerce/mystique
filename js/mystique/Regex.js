define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/Regex
    return Base.extend({

        regex: /^$/,
  
        _isValid: function(value){

            var result = new Result({value: true});

            if ( ! this.regex.test){
                this.regex = new RegExp(this.regex);
            }

            if ( ! this.regex.test(value)){
                result.set('value', false);
                result.addMessage(['regex', this.regex.source]);
            }

            return result;
        }
    });
});
