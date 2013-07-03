define([
    'mystique/messages'
],
function(messages){
    // module:
    //		mystique/Result
   
    var Result = function(options){
            for (var i in options){
                this[i] = options[i]
            }
        },
        props = {

            //value: boolean,

            //messages: array,

            set: function(property, value){
                if (this[property + 'Setter']){
                    this[property + 'Setter'](value);
                }
                this[property] = value;
            },

            get: function(property){
                if (this[property + 'Getter']){
                    return this[property + 'Getter']();
                }
                return this[property];
            },

            messagesGetter: function(){
                if (!this.messages){
                    return [];
                }

                var translated = [],
                    template,
                    i,
                    j;

                for (i in this.messages){
                    if (typeof this.messages[i] == 'string'){
                        if (messages[this.messages[i]]){
                            translated[i] = messages[this.messages[i]];
                        } else {
                            translated[i] = this.messages[i];
                        }
                    } else {
                        template = this.messages[i];
                        if (messages[template[0]]){
                            template[0] = messages[template[0]];
                        }
                        for (j = 1; j < template.length; j++){
                            template[0] = template[0].replace('${' + j + '}', template[j]);
                        }
                        translated[i] = template[0];
                    }
                }
                return translated;
            },

            addMessage: function(message){
                if (!this.messages){
                    this.messages = [];
                }
                this.messages.push(message);
            }
        },
        i;

    for (i in props){
        Result.prototype[i] = props[i];
    }

    return Result;
});
