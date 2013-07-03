define([
        'doh/main',
        'dojo/text!./testdata/date.json',
        'mystique/Date'
    ],
    function(
        doh,
        jsonData,
        DateValidator
    ){
        doh.register("mystique/test/testDate", [

            function ValidatorTest(doh){
                var validator = new DateValidator,
                    testData = JSON.parse(jsonData),
                    result,
                    index,
                    value;
            
                for (index in testData.data){

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
