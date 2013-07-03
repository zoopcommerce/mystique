define([
        'doh/main',
        'dojo/text!./testdata/creditCardExpiry.json',
        'mystique/CreditCardExpiry'
    ],
    function(
        doh,
        jsonData,
        CreditCardExpiry
    ){
        doh.register("mystique/test/testCreditCardExpiry", [

            function ValidatorTest(doh){
                var validator = new CreditCardExpiry,
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
