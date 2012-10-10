<!DOCTYPE html>
<html>
<head>
    <title>Router</title>
    <?php require_once("file.inc") ?>
</head>
<body>
<script>
    (function($){
        var SiteRouter = Backbone.Router.extend({
            routes : {
                "help/:page":         "help",
                "download/*path":     "download",
                "folder/:name":       "openFolder",
                "folder/:name-:mode": "openFolder"
            }
        });
        var PageRouter = new SiteRouter;
        Backbone.history.start();
    })(jQuery)
</script>
<a href="#download/bingo">Download</a>
</body>
</html>