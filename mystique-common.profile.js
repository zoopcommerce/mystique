var profile = (function(){
    var docsResourceRe = /^mystique-common\/docs\//;

    var ignore = function(filename, mid){
        var list = {
            "mystique-common/docs" : true
        };
        return (mid in list) ||
            docsResourceRe.test(mid);
    };

    var copyOnly = function(filename, mid){
        var list = {
	        "mystique-common/mystique-common.profile"  : true,
            "mystique-common/package.json" : true
        };
        return (mid in list) ||
            /(png|jpg|jpeg|gif|tiff)$/.test(filename);
    };

    return {
        resourceTags:{

            ignore: function(filename, mid){
		        return ignore(filename, mid);
            },

            copyOnly: function(filename, mid){
                return copyOnly(filename, mid);
            },
            amd: function(filename, mid){
                return !copyOnly(filename, mid) &&
                    !ignore(filename, mid) &&
                    (/\.js$/).test(filename);
            }
        }
    };
})();