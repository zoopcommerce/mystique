define([
        'doh/main',
        'dojo/text!./testdata/length.json',
        'mystique/Length'
    ],
    function(
        doh,
        jsonData,
        Length
    ){
        doh.register("mystique/test/testLength", [

            function ValidatorTest(doh){
                var validator,
                    testData = JSON.parse(jsonData),
                    result,
                    index;
            
                for (index in testData.data){
                    validator = new Length(testData.data[index].options);
                    
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
