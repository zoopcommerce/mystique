define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/CreditCardExpiry
    return Base.extend({

        _isValid: function(value){

            var result = new Result({value: true});

            // Check fomat
            if ( ! /^\d{1,2}$/.test(value.month) ||  ! /^\d\d\d\d$/.test(value.year)){
                result.set('value', false);
                result.addMessage('creditCardExpiry');
            }

            var month = parseInt(value.month),
                year = parseInt(value.year),
                compareMonth = new Date().getUTCMonth() + 1, //getUTCMonth returns a value 0-11, so need to +1
                compareYear = new Date().getUTCFullYear();

            // Check date is valid
            if (month < 1 ||
                month > 12 ||
                year < compareYear ||
                (year == compareYear && month < compareMonth)
            ) {
                result.set('value', false);
                result.addMessage('creditCardExpiry');
            }

            return result;
        }
    });
});