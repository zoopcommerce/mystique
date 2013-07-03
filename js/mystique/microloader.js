if (typeof require == 'undefined'){
    require = function(arg1, arg2){
        var mid,
            deps = [],
            def,
            i;

        if (arg1.cache){
            for (i in arg1.cache){
                require.cache[i] = arg1.cache[i];
            }
            return;
        }

        for (i = 0; i < arg1.length; i++){
            mid = arg1[i];
            if (!require.defs[mid]){
                define.loadingMid = mid;
                require.cache[mid]();
            }
            def = require.defs[mid];
            deps.push(require(def.deps, def.factory));
        }

        return arg2.apply({}, deps);
    }
    require.micro = true;
    require.cache = {};
    require.defs = {};

    define = function(arg1, arg2, arg3){
        var mid,
            deps,
            factory,
            factoryFactory = function(result){
                return function(){return result};
            };
        if (typeof arg1 == 'string'){
            mid = arg1;
            deps = arg2;
            factory = arg3;
        } else {
            mid = define.loadingMid;
            deps = arg1;
            factory = arg2;
        }
        if (!factory){
            factory = factoryFactory(deps);
            deps = [];
        }
        require.defs[mid] = {
            deps: deps,
            factory: factory
        }
    }
}