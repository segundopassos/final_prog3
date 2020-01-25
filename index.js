const express = require("express")
const app = express();
app.get("/", function(req,res){
    res.sendFile(__dirname + "/html/pagina.html");
});
app.get("/sobre",function(req,res){
    res.send("aff")
})
app.get("/ola/:nome/:cargo",function(req,res){
res.send(req.params)
})
app.listen(8081,function(){
    console.log("Servidor rodando!!")
});