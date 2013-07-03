define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    // module:
    //		mystique/Email
    return Base.extend({

        regex: /^([!#-'*+\-\/-9=?A-Z^-~]+[.])*[!#-'*+\-\/-9=?A-Z^-~]+@(((?:(?:[\da-zA-Z](?:[-\da-zA-Z]{0,61}[\da-zA-Z])?)\.)+(?:[a-zA-Z](?:[-\da-zA-Z]{0,6}[\da-zA-Z])?)\.?)|(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])|(0[xX]0*[\da-fA-F]?[\da-fA-F]\.){3}0[xX]0*[\da-fA-F]?[\da-fA-F]|(0+[0-3][0-7][0-7]\.){3}0+[0-3][0-7][0-7]|(0|[1-9]\d{0,8}|[1-3]\d{9}|4[01]\d{8}|42[0-8]\d{7}|429[0-3]\d{6}|4294[0-8]\d{5}|42949[0-5]\d{4}|429496[0-6]\d{3}|4294967[01]\d{2}|42949672[0-8]\d|429496729[0-5])|0[xX]0*[\da-fA-F]{1,8}|([\da-fA-F]{1,4}\:){7}[\da-fA-F]{1,4}|([\da-fA-F]{1,4}\:){6}((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])))$/i,

        _isValid: function(value){

            var result = new Result({value: true});

            if ( ! this.regex.test(value)){
                result.set('value', false);
                result.addMessage('email');
            }

            return result;
        }
    });
});