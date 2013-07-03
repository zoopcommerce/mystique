define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/CreditCard
    return Base.extend({

        _cardInfo: {
            // summary:
            //		A dictionary list of credit card abbreviations
            // description:
            //		A hash of valid CC abbreviations and regular expressions
            //
            //		- mc: Mastercard
            //		- ec: Eurocard
            //		- vi: Visa
            //		- ax: American Express
            //		- dc: Diners Club
            //		- bl: Carte Blanch
            //		- di: Discover
            //		- jcb: JCB
            //		- er: Enroute
            // example:
            //		Define your own card, gift-card, whatever. Starts with 7,
            //		is 15 total length.
            //	| 	"my":"7[0-9]{14}"


            'mc':'5[1-5][0-9]{14}',
            'ec':'5[1-5][0-9]{14}',
            'vi':'4(?:[0-9]{12}|[0-9]{15})',
            'ax':'3[47][0-9]{13}',
            'dc':'3(?:0[0-5][0-9]{11}|[68][0-9]{12})',
            'bl':'3(?:0[0-5][0-9]{11}|[68][0-9]{12})',
            'di':'6011[0-9]{12}',
            'jcb':'(?:3[0-9]{15}|(2131|1800)[0-9]{11})',
            'er':'2(?:014|149)[0-9]{11}'
        },

        _isValid: function(value){

            var result = new Result({value: true}),
                i;

            value = String(value).replace(/[- ]/g,''); //ignore dashes and whitespaces

            for(i in this._cardInfo){
                if(value.match('^' + this._cardInfo[i] + '$')){
                    return result;
                }
            }

            result.set('value', false);
            result.addMessage('creditCard');

            return result;

        }
    });
});
