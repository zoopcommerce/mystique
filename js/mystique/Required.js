define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/Required
    return Base.extend({

        haltOnFail: true,

        regex: /^\s+$/g,

        _isValid: function(value){

            var result = new Result({value: true});

            if (value === undefined || value === null || value === '' || this.regex.test(value)){
                result.set('value', false);
                result.addMessage('required');
            }

            if (typeof value == 'object'){
                var i,
                    count = 0;
                for (i in value){count++};
                if (count == 0){
                    result.set('value', false);
                    result.addMessage('required');
                }
            }
            
            if (typeof value == 'array'){
                if (value.length == 0){
                    result.set('value', false);
                    result.addMessage('required');
                }
            }

            return result;
        }
    });
});
