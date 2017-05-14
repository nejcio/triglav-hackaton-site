<!DOCTYPE html><html><head><meta charset=utf-8><meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,minimal-ui"><meta name=apple-mobile-web-app-capable content=yes><meta name=apple-mobile-web-app-status-bar-style content=black><link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css integrity=sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr crossorigin=anonymous><link href=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css rel=stylesheet integrity=sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN crossorigin=anonymous><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCApDxpsbDYUMTzqCj85TVRbxHZmruTj8U"></script>
<title>Lanceout</title>
<link href=/css/styles.css rel=stylesheet>
</head>
<body>
<script src=cordova.js></script>
<style>
    #main-app {
        display: block;
        margin:auto;
        width: 400px;
        height: 700px;
        border: 1px solid #686868;
    }
</style>
<a href="/" id="demo" class="btn btn-primary" style="margin: 30px 30px 0;"> Home</a>
<script>
document.getElementById("demo").onclick = function() {myFunction()};
function myFunction() {
    window.location.replace('/')
}
</script>
<div id="main-app">
    <div id=app></div>
</div>
<script src=/js/1ab8f403c99f71c66c57.main.js></script></body></html>