<!DOCTYPE HTML><html><head><title>Main API documentation</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="generator" content="https://github.com/raml2html/raml2html 6.3.0"><link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/styles/default.min.css"><script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script><script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/highlight.min.js"></script><script type="text/javascript">
      $(document).ready(function() {
        $('.page-header pre code, .top-resource-description pre code, .modal-body pre code').each(function(i, block) {
          hljs.highlightBlock(block);
        });

        $('[data-toggle]').click(function() {
          var selector = $(this).data('target') + ' pre code';
          $(selector).each(function(i, block) {
            hljs.highlightBlock(block);
          });
        });

        // open modal on hashes like #_action_get
        $(window).bind('hashchange', function(e) {
          var anchor_id = document.location.hash.substr(1); //strip #
          var element = $('#' + anchor_id);

          // do we have such element + is it a modal?  --> show it
          if (element.length && element.hasClass('modal')) {
            element.modal('show');
          }
        });

        // execute hashchange on first page load
        $(window).trigger('hashchange');

        // remove url fragment on modal hide
        $('.modal').on('hidden.bs.modal', function() {
          try {
            if (history && history.replaceState) {
                history.replaceState({}, '', '#');
            }
          } catch(e) {}
        });
      });
    </script><style>
      .hljs {
        background: transparent;
      }
      .parent {
        color: #999;
      }
      .list-group-item > .badge {
        float: none;
        margin-right: 6px;
      }
      .panel-title > .methods {
        float: right;
      }
      .badge {
        border-radius: 0;
        text-transform: uppercase;
        width: 70px;
        font-weight: normal;
        color: #f3f3f6;
        line-height: normal;
      }
      .badge_get {
        background-color: #63a8e2;
      }
      .badge_post {
        background-color: #6cbd7d;
      }
      .badge_put {
        background-color: #22bac4;
      }
      .badge_delete {
        background-color: #d26460;
      }
      .badge_patch {
        background-color: #ccc444;
      }
      .list-group, .panel-group {
        margin-bottom: 0;
      }
      .panel-group .panel+.panel-white {
        margin-top: 0;
      }
      .panel-group .panel-white {
        border-bottom: 1px solid #F5F5F5;
        border-radius: 0;
      }
      .panel-white:last-child {
        border-bottom-color: white;
        -webkit-box-shadow: none;
        box-shadow: none;
      }
      .panel-white .panel-heading {
        background: white;
      }
      .tab-pane ul {
        padding-left: 2em;
      }
      .tab-pane h1 {
        font-size: 1.3em;
      }
      .tab-pane h2 {
        font-size: 1.2em;
        padding-bottom: 4px;
        border-bottom: 1px solid #ddd;
      }
      .tab-pane h3 {
        font-size: 1.1em;
      }
      .tab-content {
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        padding: 10px;
      }
      #sidebar {
        margin-top: 30px;
        padding-right: 5px;
        overflow: auto;
        height: 90%;
      }
      .top-resource-description {
        border-bottom: 1px solid #ddd;
        background: #fcfcfc;
        padding: 15px 15px 0 15px;
        margin: -15px -15px 10px -15px;
      }
      .resource-description {
        border-bottom: 1px solid #fcfcfc;
        background: #fcfcfc;
        padding: 15px 15px 0 15px;
        margin: -15px -15px 10px -15px;
      }
      .resource-description p:last-child {
        margin: 0;
      }
      .list-group .badge {
        float: left;
      }
      .method_description {
        margin-left: 85px;
      }
      .method_description p:last-child {
        margin: 0;
      }
      .list-group-item {
        cursor: pointer;
      }
      .list-group-item:hover {
        background-color: #f5f5f5;
      }
      pre code {
        overflow: auto;
        word-wrap: normal;
        white-space: pre;
      }
      .items {
        background: #f5f5f5;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 9.5px;
        margin: 0 0 10px;
        font-size: 13px;
        line-height: 1.42857143;
      }
      .examples {
        margin-left: 0.5em;
      }
      .resource-modal li > ul {
        margin-bottom: 1em;
      }
    </style></head><body data-spy="scroll" data-target="#sidebar"><div class="container"><div class="row"><div class="col-md-9" role="main"><div class="page-header"><h1>Main API documentation <small>version v1</small></h1><p>http://api.samplehost.com</p></div><div class="panel panel-default"><div class="panel-heading"><h3 id="admin" class="panel-title">/admin</h3></div><div class="panel-body"><div class="top-resource-description"><p>The collection of admin</p></div><div class="panel-group"><div class="panel panel-white resource-modal"><div class="panel-heading"><h4 class="panel-title"><a class="collapsed" data-toggle="collapse" href="#panel_admin"><span class="parent"></span>/admin</a> <span class="methods"><a href="#admin_get"><span class="badge badge_get">get</span></a> <a href="#admin_post"><span class="badge badge_post">post</span></a></span></h4></div><div id="panel_admin" class="panel-collapse collapse"><div class="panel-body"><div class="list-group"><div onclick="window.location.href = '#admin_get'" class="list-group-item"><span class="badge badge_get">get</span><div class="method_description"><p>Get all admin, optionally filtered</p></div><div class="clearfix"></div></div><div onclick="window.location.href = '#admin_post'" class="list-group-item"><span class="badge badge_post">post</span><div class="method_description"><p>Create a new admin</p></div><div class="clearfix"></div></div></div></div></div><div class="modal fade" tabindex="0" id="admin_get"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_get">get</span> <span class="parent"></span>/admin</h4></div><div class="modal-body"><div class="alert alert-info"><p>Get all admin, optionally filtered</p></div><ul class="nav nav-tabs"><li class="active"><a href="#admin_get_request" data-toggle="tab">Request</a></li><li><a href="#admin_get_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="admin_get_request"><h3>Query Parameters</h3><ul><li><strong>_limit</strong>: <em>(integer)</em></li><li><strong>_sort</strong>: <em>(string)</em></li></ul></div><div class="tab-pane" id="admin_get_response"><h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2><h3>Body</h3><p><strong>Media type</strong>: application/json</p><p><strong>Type</strong>: array of adminData</p><p><strong>Items</strong>: adminData</p><div class="items"><ul><li><strong>admin_name</strong>: <em>required (string)</em></li><li><strong>admin_password</strong>: <em>required (string)</em></li><li><strong>admin_sess</strong>: <em>required (string)</em></li><li><strong>admin_enable</strong>: <em>required (string)</em></li><li><strong>admin_perm</strong>: <em>required (string)</em></li><li><strong>admin_id</strong>: <em>required (string)</em></li><li><strong>updated_at</strong>: <em>required (string)</em></li><li><strong>admin_phone</strong>: <em>required (string)</em></li><li><strong>created_at</strong>: <em>required (string)</em></li></ul></div></div></div></div></div></div></div><div class="modal fade" tabindex="0" id="admin_post"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_post">post</span> <span class="parent"></span>/admin</h4></div><div class="modal-body"><div class="alert alert-info"><p>Create a new admin</p></div><ul class="nav nav-tabs"><li class="active"><a href="#admin_post_request" data-toggle="tab">Request</a></li><li><a href="#admin_post_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="admin_post_request"><h3>Body</h3><p><strong>Media type</strong>: application/json</p><p><strong>Type</strong>: object</p><strong>Properties</strong><ul><li><strong>admin_name</strong>: <em>required (string)</em></li><li><strong>admin_password</strong>: <em>required (string)</em></li><li><strong>admin_sess</strong>: <em>required (string)</em></li><li><strong>admin_enable</strong>: <em>required (string)</em></li><li><strong>admin_perm</strong>: <em>required (string)</em></li><li><strong>admin_id</strong>: <em>required (string)</em></li><li><strong>updated_at</strong>: <em>required (string)</em></li><li><strong>admin_phone</strong>: <em>required (string)</em></li><li><strong>created_at</strong>: <em>required (string)</em></li></ul></div><div class="tab-pane" id="admin_post_response"><h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2><p>Required is successed</p><h3>Body</h3><p><strong>Media type</strong>: application/json</p><p><strong>Type</strong>: object</p><strong>Properties</strong><ul><li><strong>code</strong>: <em>required (integer)</em></li></ul><h2>HTTP status code <a href="http://httpstatus.es/404" target="_blank">404</a></h2><p>Required properties missing or validation issues.</p><h3>Body</h3><p><strong>Media type</strong>: application/json</p><p><strong>Type</strong>: object</p><strong>Properties</strong><ul><li><strong>code</strong>: <em>required (integer)</em></li><li><strong>message</strong>: <em>required (string)</em></li></ul><p><strong>Example</strong>:</p><div class="examples"><pre><code>{
  "code": 200,
  "message": "error"
}</code></pre></div></div></div></div></div></div></div></div><div class="panel panel-white resource-modal"><div class="panel-heading"><h4 class="panel-title"><a class="collapsed" data-toggle="collapse" href="#panel_admin__admin_id_"><span class="parent">/admin</span>/{admin_id}</a> <span class="methods"><a href="#admin__admin_id__get"><span class="badge badge_get">get</span></a> <a href="#admin__admin_id__put"><span class="badge badge_put">put</span></a> <a href="#admin__admin_id__delete"><span class="badge badge_delete">delete</span></a></span></h4></div><div id="panel_admin__admin_id_" class="panel-collapse collapse"><div class="panel-body"><div class="list-group"><div onclick="window.location.href = '#admin__admin_id__get'" class="list-group-item"><span class="badge badge_get">get</span><div class="method_description"></div><div class="clearfix"></div></div><div onclick="window.location.href = '#admin__admin_id__put'" class="list-group-item"><span class="badge badge_put">put</span><div class="method_description"></div><div class="clearfix"></div></div><div onclick="window.location.href = '#admin__admin_id__delete'" class="list-group-item"><span class="badge badge_delete">delete</span><div class="method_description"></div><div class="clearfix"></div></div></div></div></div><div class="modal fade" tabindex="0" id="admin__admin_id__get"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_get">get</span> <span class="parent">/admin</span>/{admin_id}</h4></div><div class="modal-body"><ul class="nav nav-tabs"><li class="active"><a href="#admin__admin_id__get_request" data-toggle="tab">Request</a></li><li><a href="#admin__admin_id__get_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="admin__admin_id__get_request"><h3>URI Parameters</h3><ul><li><strong>admin_id</strong>: <em>required (string)</em></li></ul></div><div class="tab-pane" id="admin__admin_id__get_response"><h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2><h3>Body</h3><p><strong>Media type</strong>: application/json</p><p><strong>Type</strong>: object</p><h2>HTTP status code <a href="http://httpstatus.es/404" target="_blank">404</a></h2><p>Required properties missing or validation issues.</p><h3>Body</h3><p><strong>Media type</strong>: application/json</p><p><strong>Type</strong>: object</p><strong>Properties</strong><ul><li><strong>code</strong>: <em>required (integer)</em></li><li><strong>message</strong>: <em>required (string)</em></li></ul><p><strong>Example</strong>:</p><div class="examples"><pre><code>{
  "code": 200,
  "message": "error"
}</code></pre></div></div></div></div></div></div></div><div class="modal fade" tabindex="0" id="admin__admin_id__put"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_put">put</span> <span class="parent">/admin</span>/{admin_id}</h4></div><div class="modal-body"><ul class="nav nav-tabs"><li class="active"><a href="#admin__admin_id__put_request" data-toggle="tab">Request</a></li><li><a href="#admin__admin_id__put_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="admin__admin_id__put_request"><h3>URI Parameters</h3><ul><li><strong>admin_id</strong>: <em>required (string)</em></li></ul><h3>Body</h3><p><strong>Media type</strong>: application/json</p><p><strong>Type</strong>: object</p></div><div class="tab-pane" id="admin__admin_id__put_response"><h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2><p>Required is successed</p><h3>Body</h3><p><strong>Media type</strong>: application/json</p><p><strong>Type</strong>: object</p><strong>Properties</strong><ul><li><strong>code</strong>: <em>required (integer)</em></li></ul><h2>HTTP status code <a href="http://httpstatus.es/404" target="_blank">404</a></h2><p>Required properties missing or validation issues.</p><h3>Body</h3><p><strong>Media type</strong>: application/json</p><p><strong>Type</strong>: object</p><strong>Properties</strong><ul><li><strong>code</strong>: <em>required (integer)</em></li><li><strong>message</strong>: <em>required (string)</em></li></ul><p><strong>Example</strong>:</p><div class="examples"><pre><code>{
  "code": 200,
  "message": "error"
}</code></pre></div></div></div></div></div></div></div><div class="modal fade" tabindex="0" id="admin__admin_id__delete"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_delete">delete</span> <span class="parent">/admin</span>/{admin_id}</h4></div><div class="modal-body"><ul class="nav nav-tabs"><li class="active"><a href="#admin__admin_id__delete_request" data-toggle="tab">Request</a></li><li><a href="#admin__admin_id__delete_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="admin__admin_id__delete_request"><h3>URI Parameters</h3><ul><li><strong>admin_id</strong>: <em>required (string)</em></li></ul><h3>Body</h3><p><strong>Media type</strong>: application/json</p><p><strong>Type</strong>: object</p></div><div class="tab-pane" id="admin__admin_id__delete_response"><h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2><p>Required is successed</p><h3>Body</h3><p><strong>Media type</strong>: application/json</p><p><strong>Type</strong>: object</p><strong>Properties</strong><ul><li><strong>code</strong>: <em>required (integer)</em></li></ul><h2>HTTP status code <a href="http://httpstatus.es/404" target="_blank">404</a></h2><p>Required properties missing or validation issues.</p><h3>Body</h3><p><strong>Media type</strong>: application/json</p><p><strong>Type</strong>: object</p><strong>Properties</strong><ul><li><strong>code</strong>: <em>required (integer)</em></li><li><strong>message</strong>: <em>required (string)</em></li></ul><p><strong>Example</strong>:</p><div class="examples"><pre><code>{
  "code": 200,
  "message": "error"
}</code></pre></div></div></div></div></div></div></div></div></div></div></div></div><div class="col-md-3"><div id="sidebar" class="hidden-print affix" role="complementary"><ul class="nav nav-pills nav-stacked"><li><a href="#admin">/admin</a></li></ul></div></div></div></div></body></html>