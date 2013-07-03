define([],
function(){
    // module:
    //		mystique/Base

    var Base = function(){},
        mixin = {
            // summary:
            //		The base Validator module that all other Validator modules
            //		should inherit from.

            //haltOnPass: boolean
            //     If this validator is part of a ValidatorGroup, setting
            //     to true will stop any Validators after this one
            //     from executing if this validator passes
            //haltOnPass: false,

            //haltOnFail: boolean
            //     If this validator is part of a ValidatorGroup, setting
            //     to true will stop any Validators after this one
            //     from executing if this validator fails
            //haltOnFail: false,

            //skipOnPass:
            //     If this validator is part of a ValidatorGroup, setting
            //     to true will skip evaluating this validator, if all previous
            //     validators have already evaluated to true
            //skipOnPass: false,

            //skipOnFail:
            //     If this validator is part of a ValidatorGroup, setting
            //     to true will skip evaluating this validator, if a previous
            //     validator has already evaluated to false
            //skipOnFail: false,

            useCache: true,

            //_validatedValuesCache: undefined,

            isValidator: true,

            maxCacheSize: 50,

            isValid: function(value){

                var valueString = JSON.stringify(value);

                if (this.useCache){
                    if (! this._validatedValuesCache){
                        this._validatedValuesCache = {};
                    }
                    var cacheItem = this._validatedValuesCache[valueString];
                    if(cacheItem){
                        return cacheItem;
                    }
                }

                var result = this._isValid(value);

                if (this.useCache){
                    this._addToCache(valueString, result);
                }

                return result;
            },

            _isValid: function(value){
                // summary:
                //     Should be overridden by inheriting modules.
                //     Will check if the supplied value is valid or not.
                //     If the value is invalid, should populate the messages array.
                //
                // returns:
                //     instance of mystique/Result
            },

            _addToCache: function(valueString, result){
                var self = this,
                    cacheResult = function(result){
                        var value = result.get('value');
                        if (value.then){
                            result.value.then(function(result){
                                cacheResult(result);
                            });
                        } else {
                            if (self._validatedValuesCache.length > self.maxCacheSize){
                                self._validatedValuesCache.shift();
                            }
                            self._validatedValuesCache[valueString] = result;
                        }
                    };

                cacheResult(result);
            }
        },
        i;

    for (i in mixin){
        Base.prototype[i] = mixin[i];
    }

    Base.extend = function(mixin){
        var Child = function(options){
            for (i in options){
                this[i] = options[i];
            }
        };

        Child.prototype = new this;
        Child.prototype.constructor = Child;
        Child.constructor = this.prototype.constructor;

        for (i in mixin){
            Child.prototype[i] = mixin[i];
        }
        Child.extend = this.extend;
        return Child;
    }

    return Base;
});
