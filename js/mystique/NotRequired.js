define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/NotRequired
    return Base.extend({

        _isValid: function(value){

            var result = new Result({value: true});

            this.haltOnPass = false;

            if (value === undefined || value === null || value == ''){
                this.haltOnPass = true;
            }
     
            return result;
        }
    });
});
