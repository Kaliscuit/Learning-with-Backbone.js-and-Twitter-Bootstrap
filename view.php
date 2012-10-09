<!DOCTYPE html>
<html>
<head>
    <title>View</title>
    <?php require_once("file.inc") ?>
</head>
<body>
<script>
    (function($){
        var SimpleView = Backbone.View.extend({
            initialize : function(){
                console.log('Initialized!');
            }
        });
        var newSimpleView = new SimpleView();
    })(jQuery)
</script>
</body>
</html>