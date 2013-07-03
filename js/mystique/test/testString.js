define([
        'doh/main',
        'dojo/text!./testdata/string.json',
        'mystique/String'
    ],
    function(
        doh,
        jsonData,
        String
    ){
        doh.register("mystique/test/testString", [

            function ValidatorTest(doh){
                var validator = new String,
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
