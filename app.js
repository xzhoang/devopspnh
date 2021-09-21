var express = require('express');
var app = express();
app.route('/Node').get(function(req,res)
{
    res.send("Tutorial on Node");
});
app.route('/Angular').get(function(req,res)
{
    res.send("Tutorial on Angular");
});
app.get('/',function(req,res){
    res.send('Welcome to Guru99 Tutorials');
});

//console.log("Start website on port 3000. Press Ctrl +C to stop");
var server=app.listen(3000,function() {});