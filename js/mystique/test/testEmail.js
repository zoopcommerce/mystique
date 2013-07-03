define([
        'doh/main',
        'dojo/text!./testdata/email.json',
        'mystique/Email'
    ],
    function(
        doh,
        jsonData,
        Email
    ){
        doh.register("mystique/test/testEmail", [

            function ValidatorTest(doh){
                var validator = new Email,
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
