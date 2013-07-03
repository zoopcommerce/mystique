define([
        'doh/main',
        'dojo/text!./testdata/regex.json',
        'mystique/Regex'
    ],
    function(
        doh,
        jsonData,
        Regex
    ){
        doh.register("mystique/test/testRegex", [

            function ValidatorTest(doh){
                var validator,
                    testData = JSON.parse(jsonData),
                    result,
                    index;

                for (index in testData.data){
                    validator = new Regex(testData.data[index].options);

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
