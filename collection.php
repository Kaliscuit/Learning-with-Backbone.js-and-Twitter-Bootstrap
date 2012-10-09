<!DOCTYPE html>
<html>
<head>
    <title>index</title>
    <?php require_once("file.inc") ?>
</head>
<body>
<script>
    (function($){
        var People = Backbone.Model.extend({
            initialize: function(){

            },
            default: {
                name    : 'Untitled',
                gender  : 'Untitled'
            }
        })

        var Human = Backbone.Collection.extend({
            model:People
        })

        var Man     = new People({gender:'Male'});
        var Woman   = new People({gender:'Female'});

        var HumanBeing = new Human([Man,Woman]);
        
        HumanBeing.each(function(People){
            console.log('People\'s gender is ' + People.get('gender'));
        })

        var HumanBeing = new Human;
        HumanBeing.each(function(People){
            console.log('People\'s gender is ' + People.get('gender'));
        })
    })(jQuery)
</script>
</body>
</html>