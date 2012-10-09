<!DOCTYPE html>
<html>
<head>
    <title>Model</title>
    <?php require_once("file.inc") ?>
</head>
<body>
<script>
    (function($){

        var people = Backbone.Model.extend({
            url: 'save',
            initialize: function(){
                console.log("Initialized!");
                this.bind("change:name",function(){
                    var newName = this.get('name');
                    console.log("Name changed to " + newName);
                });
                this.bind("error",function(model,error){
                    console.log(error);
                })
            },
            defaults: {
                name: 'Untitled',
                gender: 'Male'
            },
            validate: function(attributes){
                if(attributes.name==''){
                    return "Name cannot be null.";
                }
            },
            describe: function(){
              return 'Name:' + this.get('name');
            }
        });

        var Tommy = new people;
        console.log(Tommy.get('name'));

        Tommy.set({name:''});

        Tommy.set({name:'Tommy',age:19});
        console.log(Tommy.get('age'));

        console.log(Tommy.describe());

        Tommy.save();

    })(jQuery);
</script>
</body>
</html>