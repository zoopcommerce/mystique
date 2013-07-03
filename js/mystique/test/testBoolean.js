define([
        'doh/main',
        'dojo/text!./testdata/boolean.json',
        'mystique/Boolean'
    ],
    function(
        doh,
        jsonData,
        Boolean
    ){
        doh.register("mystique/test/testBoolean", [

            function ValidatorTest(doh){
                var validator = new Boolean,
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
