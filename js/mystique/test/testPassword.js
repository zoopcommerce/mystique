define([
        'doh/main',
        'dojo/text!./testdata/password.json',
        'mystique/Password'
    ],
    function(
        doh,
        jsonData,
        Password
    ){
        doh.register("mystique/test/testPassword", [

            function ValidatorTest(doh){
                var validator = new Password,
                    testData = JSON.parse(jsonData),
                    result,
                    index;

                for (index in testData.data){

                    result = validator.isValid(testData.data[index].value);

                    if (testData.data[index].result){
                        doh.assertTrue(result.get('value'))
                    } else {
                        doh.assertFalse(result.get('value'))
                    }
                }
            }
        ]);
    }
);
