define([
        'doh/main',
        'dojo/text!./testdata/alpha.json',
        'mystique/Alpha'
    ],
    function(
        doh,
        jsonData,
        Alpha
    ){
        doh.register("mystique/test/testAlpha", [

            function ValidatorTest(doh){
                var validator = new Alpha,
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
