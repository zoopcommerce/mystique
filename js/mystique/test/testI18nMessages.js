define([
        'doh/main',
        'mystique/Length'
    ],
    function(
        doh,
        Length
    ){
        doh.register("mystique/test/testI18nMessages", [

            function ValidatorTest(doh){
                var validator = new Length({min: 1, max: 5}),
                    result = validator.isValid('123456');
            
                doh.assertEqual('Must be between 1 and 5 characters long', result.get('messages')[0]);
            }
        ]);
    }
);
