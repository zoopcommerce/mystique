if (require.micro){
    define(['mystique/nls/messages'], function(messages){return messages.root;})
} else {
    define(['dojo/i18n!mystique/nls/messages'], function(messages){return messages;})
}
