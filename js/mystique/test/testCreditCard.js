define([
        'doh/main',
        'dojo/text!./testdata/creditCard.json',
        'mystique/CreditCard'
    ],
    function(
        doh,
        jsonData,
        CreditCard
    ){
        doh.register("mystique/test/testCreditCard", [

            function ValidatorTest(doh){
                var validator = new CreditCard,
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
