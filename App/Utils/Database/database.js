
const mysql = require('mysql');
const con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "2212mK22",
    database: "sandwich_quizz"
});
con.connect(function (err) {
    if (err) throw err;
    console.log("Connecté à la base de données MySQL!");
    con.query("SELECT answer_check FROM answer", function (err, result) {
        if (err) throw err;
        console.log(result);
        module.exports = con;
    });
});