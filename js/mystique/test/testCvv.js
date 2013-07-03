define([
        'doh/main',
        'dojo/text!./testdata/cvv.json',
        'mystique/Cvv'
    ],
    function(
        doh,
        jsonData,
        Cvv
    ){
        doh.register("mystique/test/testCvv", [

            function ValidatorTest(doh){
                var validator = new Cvv,
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
