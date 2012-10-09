<!DOCTYPE html>
<html>
<head>
    <title>Hello World!</title>
    <?php require_once("file.inc") ?>
</head>
<body>
<script>
    (function($){
        var ListView = Backbone.View.extend({
            el: $('body'),
            initialize: function(){
                _.bindAll(this, 'render');
                this.render();
            },
            render: function(){
                $(this.el).append("Hello world");
            }
        });
        var listView = new ListView();
    })(jQuery);
</script>
</body>
</html>