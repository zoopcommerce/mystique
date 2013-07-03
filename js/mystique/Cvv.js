define([
    'mystique/Length',
    'mystique/Int',
    'mystique/Chain'
],
function(
    Length,
    Int,
    Chain
){
    // module:
    //		mystique/Cvv
    return Chain.extend({

        validators: [
            new Length({min: 3, max: 4}),
            new Int
        ]
    });
});
