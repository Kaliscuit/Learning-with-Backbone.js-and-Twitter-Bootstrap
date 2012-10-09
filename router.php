<!DOCTYPE html>
<html>
<head>
    <title>Router</title>
    <?php require_once("file.inc") ?>
</head>
<body>
<script>
    (function($){
        var peopleRouter = Backbone.Router.extend({
            routes : {
                "help/:page":         "help",
                "download/*path":     "download",
                "folder/:name":       "openFolder",
                "folder/:name-:mode": "openFolder"
            }
        });
        Backbone.history.start();
    })(jQuery)
</script>
</body>
</html>