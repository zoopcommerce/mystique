define([
        'doh/main',
        'dojo/text!./testdata/required.json',
        'mystique/Required'
    ],
    function(
        doh,
        jsonData,
        Required
    ){
        doh.register("mystique/test/testRequired", [

            function ValidatorTest(doh){
                var validator = new Required,
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
