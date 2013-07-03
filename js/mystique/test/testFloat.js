define([
        'doh/main',
        'dojo/text!./testdata/float.json',
        'mystique/Float'
    ],
    function(
        doh,
        jsonData,
        Float
    ){
        doh.register("mystique/test/testFloat", [

            function ValidatorTest(doh){
                var validator = new Float,
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
