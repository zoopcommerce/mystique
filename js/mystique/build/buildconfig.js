// Dojo Configuration
dojoConfig = {
    async: true,
    baseUrl: "../",
    packages: [
        {
            name: "dojo",
            location: "dojo"
        },
        {
            name:'util',
            location:'util'
        },
        {
            name:'build',
            location:'util/build'
        },
        {
            name:'doh',
            location:'util/doh'
        },
        {
            name: "mystique",
            location: "mystique"
        }
    ]
};

require('../../dojo/dojo');
