<!DOCTYPE html>
<html>
<head>
    <title>View</title>
    <?php require_once("file.inc") ?>
</head>
<body>
<div id="search_container"></div>
<script type="text/template" id="search_template"> <label>Search label</label> <input type="text" id="search_input"/> <input type="button" id="search_button" value="Search"/>
</script>
<script>
    (function($){
        var SimpleView = Backbone.View.extend({
            initialize : function(){
                console.log('Initialized!');
            },
            render : function(){
              var template = _.template($("#search_template").html(),{});
                this.el.html(template);
            },
            events : {//就是在这里绑定的
                'click input[type=button]':'doSearch'
            },
            doSearch : function(event){
                alert("search for "+$("#search_input").val());
            }
        });
        var newSimpleView = new SimpleView({el:$("#search_container")});
        newSimpleView.render();

//        var ItemView = Backbone.View.extend({
//            tagName: 'li'
//        });
//
//        var BodyView = Backbone.View.extend({
//            el: 'body'
//        });
//
//        var item = new ItemView();
//        var body = new BodyView();
//
//        console.log(item.el + ' ' + body.el);

    })(jQuery)
</script>
</body>
</html>