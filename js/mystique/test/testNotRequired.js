define([
        'doh/main',
        'mystique/NotRequired',
        'mystique/Alpha',
        'mystique/Chain'
    ],
    function(
        doh,
        NotRequired,
        Alpha,
        Chain
    ){
        doh.register("mystique/test/testNotRequired", [

            function ValidatorTest(doh){
                var validator = new Chain({validators: [new NotRequired, new Alpha]}),
                    testData = {data: [
                        {value: null, result: true},
                        {value: '123', result: false},
                        {value: 'abc', result: true}
                    ]},
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
