var profile = (function(){
    var testResourceRe = /^mystique\/test\//;
    var buildResourceRe = /^mystique\/build\//;
    var tmpResourceRe = /^mystique\/tmp\//;
    var distResourceRe = /^mystique\/dist\//;

    var ignore = function(filename, mid){
        var list = {
            "mystique/build" : true,
            "mystique/dist"  : true,
            "mystique/tmp"   : true
        };
        return (mid in list) ||
            buildResourceRe.test(mid) ||
            distResourceRe.test(mid) ||
            tmpResourceRe.test(mid);
    };

    var test = function(filename, mid){
        var list = {
            "mystique/test"  : true
        };
        return (mid in list) ||
            testResourceRe.test(mid);
    };

    var copyOnly = function(filename, mid){
        var list = {
	    "mystique/mystique.profile"  : true,
            "mystique/package.json" : true
        };
        return (mid in list) ||
            /(png|jpg|jpeg|gif|tiff)$/.test(filename);
    };

    return {
        resourceTags:{

            ignore: function(filename, mid){
		return ignore(filename, mid);
            },

            test: function(filename, mid){
		return test(filename, mid);
            },

            copyOnly: function(filename, mid){
                return copyOnly(filename, mid);
            },

            amd: function(filename, mid){
                return !test(filename, mid) &&
                    !copyOnly(filename, mid) &&
                    !ignore(filename, mid) &&
                    (/\.js$/).test(filename);
            }
        }
    };
})();