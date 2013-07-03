define([
        'doh/main',
        'dojo/text!./testdata/slug.json',
        'mystique/Slug'
    ],
    function(
        doh,
        jsonData,
        Slug
    ){
        doh.register("mystique/test/testSlug", [

            function ValidatorTest(doh){
                var validator = new Slug,
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
