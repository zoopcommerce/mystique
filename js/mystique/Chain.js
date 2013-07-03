define([
    'mystique/Base',
    'mystique/Result'
],
function(
    Base,
    Result
){
    return Base.extend({

//        hasInstanceOf: function(Constructor){
//            for (var item in this.validators){
//                if (this.validators[item].isInstanceOf(Constructor)){
//                    return true;
//                }
//            }
//        },

        _isValid: function(value){
            if (!this.validators){
                return;
            }
            return this._concatResultList(this._loop(value, 0, []));
        },

        _loop: function(value, index, resultList){
            //Summary:
            //    loops over all the validators in turn.
            //    This code is slightly insane, but it works.
            //    Most of the instanity comes from handling the possibility
            //    that a validator may return a promise (dojo/Deferred). If a promise is
            //    returned from one or more validators, then a promise will
            //    be returned from the Group
            //

            if (this.validators.length <= index){
                return resultList;
            }

            var validator = this.validators[index],
                currentValue = this._currentValue(resultList);

            if ( !(validator.skipOnPass && currentValue) && !(validator.skipOnFail && ! currentValue)){

                var result = this._getResult(validator, value);

                if (result.value.then){

                    var resultPromise = {
                        then: function(callBack, errBack, progressBack){
                            this.callBack = callBack;
                            this.errBack = errBack;
                            this.progressBack = progressBack;
                        },
                        resolve: function(result){
                            this.callBack(result);
                        }
                    },
                    self = this;

                    resultList[index] = new Result({value: resultPromise, messages: result.messages});

                    result.value.then(function(result){
                        resultList[index] = result;
                        if (result.value === true){
                            if (validator.haltOnPass){halt = true}
                        } else {
                            if (validator.haltOnFail){halt = true}
                        }

                        if (halt){
                            resultPromise.resolve(self._concatResultList(resultList));
                        } else {
                            resultPromise.resolve(self._concatResultList(self._loop(value, index + 1, resultList)));
                        }
                    });

                    return resultList;
                } else {
                    resultList[index] = result;

                    var halt = false;
                    if (result.value === true){
                        if (validator.haltOnPass){halt = true}
                    } else {
                        if (validator.haltOnFail){halt = true}
                    }

                    if (halt){
                        return resultList;
                    } else {
                        return this._loop(value, index + 1, resultList);
                    }
                }
            }

            return resultList;
        },

        _getResult: function(validator, value){
            return validator.isValid(value);
        },

        _concatResultList: function(resultList){
            var result = new Result({value: this._currentValue(resultList)});
            for (var index in resultList){
                if (resultList[index].messages){
                    if (!result.messages){
                        result.messages = [];
                    }
                    result.messages = result.messages.concat(resultList[index].messages);
                }
            }
            return result;
        },

        _currentValue: function(resultList){
            var value = true;
            for (var index in resultList){
                if (resultList[index].value === false){
                    value = false;
                } else if (resultList[index].value.then){
                    value = resultList[index].value;
                    return value;
                }
            }
            return value;
        }
    });
})
