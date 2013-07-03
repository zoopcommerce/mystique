define([
        'doh/main',
        'dojo/text!./testdata/hexColor.json',
        'mystique/HexColor'
    ],
    function(
        doh,
        jsonData,
        HexColor
    ){
        doh.register("mystique/test/testHexColor", [

            function ValidatorTest(doh){
                var validator = new HexColor,
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
