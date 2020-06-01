var mysql=require('mysql');
var con=mysql.createConnection({
    host:"localhost",
    user:"root",
    password:"",
    database: "abes"
})
con.connect(function(err){
    if (err) throw err;
    console.log("connected");
    var sql="INSERT INTO item Values (404,'chocolate',75)";
    con.query(sql,function(err,result){
        if (err) throw err;
        console.log("1 item inserted");
    })
})