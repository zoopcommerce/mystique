define([
        'doh/main',
        'dojo/text!./testdata/int.json',
        'mystique/Int'
    ],
    function(
        doh,
        jsonData,
        Int
    ){
        doh.register("mystique/test/testInt", [

            function ValidatorTest(doh){
                var validator = new Int,
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
