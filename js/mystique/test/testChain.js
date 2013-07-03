define([
        'doh/main',
        'mystique/test/asset/DeferredValidator',
        'mystique/NotRequired',
        'mystique/Alpha',
        'mystique/Chain'
    ],
    function(
        doh,
        DeferredValidator,
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
            },

            function deferredValidatorTest1(doh){

                var deferredTest = new doh.Deferred;

                var validator = new Chain({validators: [
                    new DeferredValidator,
                    new Alpha,
                ]});

                validator.isValid('awesome').value.then(function(result){
                    doh.assertTrue(result.value);
                    deferredTest.callback(true);
                });

                return deferredTest;
            },

            function deferredValidatorTest2(doh){

                var deferredTest = new doh.Deferred;

                var validator = new Chain({validators: [
                    new DeferredValidator,
                    new Alpha,
                ]});

                validator.isValid(1233456).value.then(function(result){
                    doh.assertFalse(result.value);
                    deferredTest.callback(true);
                });

                return deferredTest;
            }
        ]);
    }
);
