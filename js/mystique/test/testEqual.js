define([
        'doh/main',
        'dojo/text!./testdata/equal.json',
        'mystique/Equal'
    ],
    function(
        doh,
        jsonData,
        Equal
    ){
        doh.register("mystique/test/testEqual", [

            function ValidatorTest(doh){
                var validator,
                    testData = JSON.parse(jsonData),
                    result,
                    index,
                    value,
                    options;
            
                for (index in testData.data){

                    options = testData.data[index].options;

                    if (options.compare.day && options.compare.month && options.compare.year){
                        options.compare = new Date(options.compare.year, options.compare.month, options.compare.day);
                    }
                    validator = new Equal(options);

                    value = testData.data[index].value;
                    if (value.day && value.month && value.year){
                        value = new Date(value.year, value.month, value.day);
                    }
                    result = validator.isValid(value);

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
