const { Router } = require('express');
const router = Router();
const crypto = require('crypto');
const mysql = require('mysql');
const hat = require('hat');
const https = require('https')
const fs = require('fs');
var Rcon = require('rcon');
var ruta = require('path'); 
const XMLHttpRequest = require("xmlhttprequest").XMLHttpRequest;

var options = {
    tcp: false,       // false for UDP, true for TCP (default true)
    challenge: false  //s true to use the challenge protocol (default true)
  };
  
const conn = new Rcon('127.0.0.1', 30120, "1234567890", options);
                      //ip       //puerto  //password //maxtimeout
const apiDatabaseCon = mysql.createPool({
    host: "localhost",
    user: "root",
    password: "",
    database: "api"
});

const serverDatabaseCon = mysql.createPool({
    host: "localhost",
    user: "root",
    password: "",
    database: "spaincityroleplay"
});

var permissionsList = null;

fs.readFile('OtherData/permissions.json', 'utf8', function(err, data){
    permissionsList = JSON.parse(data);
});

/**0=iniciar sesion
1=Enter Dashboard
2=see user info
3=add weapon to user
4=delete user weapon
5=ck
6=send aviso
7=ban temp
8=ban perma
9=kick
10=screenshot
11=seeBanList
12=unban user
13=searchUser
14=see online users
15=seemafias
16=see mafia members
17=see mafia armarios
18=seebanda
19=see banda members
20=see banda armarios
21=see staff list
22=add staff
23=cerrar sesion**/
function newLogUser(type, message, action, staffIP){
    fs.readFile('Datos/staffInfo.json', 'utf8', function(err, data){
        var obj = JSON.parse(data);
        for(var key in obj) {
            if(obj[key].IP == staffIP){
                let date_ob = new Date();
                let date = ("0" + date_ob.getDate()).slice(-2);
                let month = ("0" + (date_ob.getMonth() + 1)).slice(-2);
                let year = date_ob.getFullYear();
                let hours = date_ob.getHours();
                let minutes = date_ob.getMinutes();
                let seconds = date_ob.getSeconds();
                var currentTime = date + "-" + month + "-" + year + " " + hours + ":" + minutes + ":" + seconds;
                var sql = "INSERT INTO logs (`Type`, `Message`, `Action`, `Staff`, `Date`) VALUES ('${tipo}' ,'${message}' ,'${action}' ,'${staff}' ,'${date}')"
                var sqlModified = sql.replace("${tipo}", type).replace("${message}", message).replace("${action}", action).replace("${staff}", obj[key].Username).replace("${date}", currentTime);
                apiDatabaseCon.query(sqlModified, function (err, result) {
                    if (err){
                        return false;
                        throw err;
                    } else {
                        return true;
                    }
                });
                break;
            }
        }
    });
}

function checkPermissions(ip){
    return new Promise(function(resolve, reject) {
        if (fs.existsSync('Datos/staffInfo.json')) {
            fs.readFile('Datos/staffInfo.json', 'utf8', function(err, data){
                var obj = JSON.parse(data);
                var answered = false;
                for(var key in obj) {
                    if(obj[key].IP == ip){
                        resolve(obj[key].Permisos);
                        answered = true;
                    }
                }
                if(!answered){
                   
                    reject();
                }
            });
        }
    });
}

router.post('/login', (req, res) => {
    const { username, password } = req.body;
    const ip = req.ip.substring(7);
    const passwordHashed = crypto.createHash('md5').update(password).digest('hex');
    const sql = `SELECT * FROM users WHERE Username = '${username}' AND Password = '${passwordHashed}'`;
    apiDatabaseCon.query(sql, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            const cookieToken = hat();
            apiDatabaseCon.query(`UPDATE users SET CookieToken = '${cookieToken}' WHERE Username = '${username}'`, function (err2, result2, fields2) {
                if (err2) throw err2;
                newLogUser(0, "Inicio de sesión", 1, ip)
                try {
                    if (fs.existsSync('Datos/staffInfo.json')) {
                        fs.readFile('Datos/staffInfo.json', 'utf8', function(err, data){
                            var obj = JSON.parse(data);
                            var ProductOBJ = {};
                            var ProductOBJ = new Object();
                            var ProductOBJ = {
                                "Username": result[0].Username,
                                "Password": result[0].Password,
                                "CookieToken": result[0].CookieToken,
                                "Permisos": result[0].Permisos,
                                "Rango": result[0].Rango,
                                "JoinDate": result[0].JoinDate,
                                "IP": ip
                            }
                            obj.push(ProductOBJ);
                            fs.writeFile('Datos/staffInfo.json', JSON.stringify(obj, null, "\t").toString(), err => {
                                if (err) throw err;
                                res.json({
                                    "Status": "Success", "Cookie": result[0].CookieToken
                                });
                            });
                        });
                    } else {
                        var ProductOBJ = {};
                        var ProductOBJ = new Object();
                        var ProductOBJ = [{
                            "Username": result[0].Username,
                            "Password": result[0].Password,
                            "CookieToken": result[0].CookieToken,
                            "Permisos": result[0].Permisos,
                            "Rango": result[0].Rango,
                            "JoinDate": result[0].JoinDate,
                            "IP": ip
                        }]
                        fs.writeFile('Datos/staffInfo.json', JSON.stringify(ProductOBJ, null, "\t").toString(), err => {
                            if (err) throw err;
                            res.json({
                                "Status": "Success", "Cookie": result[0].CookieToken
                            });
                        });
                    }
                } catch(err) {
                    res.json({"Status": "Bad"});
                    console.error(err)
                }
            });
        } else {
            res.json({"Status": "Bad"});
        }
    });
});

router.post('/getUserPanelData', (req, res) => {
    const { cookie } = req.body;
    try {
        if (fs.existsSync('Datos/staffInfo.json')) {
            fs.readFile('Datos/staffInfo.json', 'utf8', function(err, data){
                var obj = JSON.parse(data);
                for(var key in obj) {
                    if(obj[key].CookieToken == cookie){
                        res.json({"Status": "Success", "Result": obj[key], "By": "File"});
                        break;
                    }
                }
            });
        } else {
            apiDatabaseCon.query(`SELECT * FROM users WHERE CookieToken = '${cookie}'`, function (err, result, fields) {
                if (err) throw err;
                if(result.length != 0){
                    res.json({"Status": "Success", "Result": result[0]});
                } else {
                    res.json({"Status": "Bad"});
                }
            });
        }
    } catch(err) {
        console.error(err)
    }
});

router.post('/getUserData', (req, res) => {
    const { identifier } = req.body;
    const ip = req.ip.substring(7);
    try {
        newLogUser(2, `Ha visto la información del usuario con identificador: ${identifier}`, 0, ip)
        if (fs.existsSync('Datos/userData.json')) {
            fs.readFile('Datos/userData.json', 'utf8', function(err, data){
                var obj = JSON.parse(data);
                var finded = false;
                for(var key in obj) {
                    if(obj[key].identifier == identifier){
                        finded = true;
                        res.json({"Status": "Success", "Result": obj[key]});
                        break;
                    }
                }
                if(!finded){
                    serverDatabaseCon.query(`SELECT * FROM users WHERE identifier = '${identifier}' `, function (err, result, fields) {
                        if (err) throw err;
                        if(result.length != 0){
                            //res.json({"Status": "Success", "Result": result[0]});
                            serverDatabaseCon.query(`SELECT * FROM addon_account_data WHERE owner = '${identifier}' `, function (err2, result2, fields2) {
                                if (err2) throw err2;
                                if(result2.length != 0){
                                    //res.json({"Status": "Success", "Result": result[0]});
                                    result[0].Sociedades = result2;
                                } else {
                                    result[0].Sociedades = null;
                                }
                                serverDatabaseCon.query(`SELECT * FROM banlist WHERE identifier = '${identifier}' `, function (err3, result3, fields3) {
                                    if (err3) throw err3;
                                    if(result3.length != 0){
                                        result[0].Banned = true;
                                    } else {
                                        result[0].Banned = false;
                                    }
                                    serverDatabaseCon.query(`SELECT * FROM billing WHERE identifier = '${identifier}' OR sender = '${identifier}'`, function (err4, result4, fields4) {
                                        if (err4) throw err4;
                                        if(result4.length != 0){
                                            result[0].BillingTransactions = result4;
                                        } else {
                                            result[0].BillingTransactions = null;
                                        }
                                        serverDatabaseCon.query(`SELECT * FROM communityservice WHERE identifier = '${identifier}'`, function (err5, result5, fields5) {
                                            if (err5) throw err5;
                                            if(result5.length != 0){
                                                result[0].CommunityServices = result5;
                                            } else {
                                                result[0].CommunityServices = null;
                                            }
                                            serverDatabaseCon.query(`SELECT * FROM datastore_data WHERE owner = '${identifier}'`, function (err6, result6, fields6) {
                                                if (err6) throw err6;
                                                if(result6.length != 0){
                                                    result[0].HouseData = result6;
                                                } else {
                                                    result[0].HouseData = null;
                                                }
                                                serverDatabaseCon.query(`SELECT * FROM dk_vender WHERE seller = '${identifier}' OR buyer = '${identifier}'`, function (err7, result7, fields7) {
                                                    if (err7) throw err7;
                                                    if(result7.length != 0){
                                                        result[0].CarsSelled = result7;
                                                    } else {
                                                        result[0].CarsSelled = null;
                                                    }
                                                    serverDatabaseCon.query(`SELECT * FROM owned_aircrafts WHERE owner = '${identifier}'`, function (err8, result8, fields8) {
                                                        if (err8) throw err8;
                                                        if(result8.length != 0){
                                                            result[0].Aircrafts = result8;
                                                        } else {
                                                            result[0].Aircrafts = null;
                                                        }
                                                        serverDatabaseCon.query(`SELECT * FROM owned_boats WHERE owner = '${identifier}'`, function (err9, result9, fields9) {
                                                            if (err9) throw err9;
                                                            if(result9.length != 0){
                                                                result[0].Boats = result9;
                                                            } else {
                                                                result[0].Boats = null;
                                                            }
                                                            serverDatabaseCon.query(`SELECT * FROM owned_properties WHERE owner = '${identifier}'`, function (err10, result10, fields10) {
                                                                if (err10) throw err10;
                                                                if(result10.length != 0){
                                                                    result[0].Properties = result10;
                                                                } else {
                                                                    result[0].Properties = null;
                                                                }
                                                                serverDatabaseCon.query(`SELECT * FROM owned_vehicles WHERE owner = '${identifier}'`, function (err11, result11, fields11) {
                                                                    if (err11) throw err11;
                                                                    if(result11.length != 0){
                                                                        result[0].Vehicles = result11;
                                                                    } else {
                                                                        result[0].Vehicles = null;
                                                                    }
                                                                    serverDatabaseCon.query(`SELECT * FROM tm1_membersgroups WHERE identifier = '${identifier}'`, function (err12, result12, fields12) {
                                                                        if (err12) throw err12;
                                                                        if(result12.length != 0){
                                                                            result[0].MafiaDetails = result12;
                                                                        } else {
                                                                            result[0].MafiaDetails = null;
                                                                        }
                                                                        serverDatabaseCon.query(`SELECT * FROM user_licenses WHERE owner = '${identifier}'`, function (err13, result13, fields13) {
                                                                            if (err13) throw err13;
                                                                            if(result13.length != 0){
                                                                                result[0].UserLicenses = result13;
                                                                            } else {
                                                                                result[0].UserLicenses = null;
                                                                            }
                                                                            serverDatabaseCon.query(`SELECT * FROM baninfo WHERE identifier = '${identifier}'`, function (err14, result14, fields14) {
                                                                                if (err14) throw err14;
                                                                                if(result14.length != 0){
                                                                                    result[0].BanID = result14[0].id;
                                                                                }
                                                                                serverDatabaseCon.query(`SELECT * FROM user_licenses WHERE owner = '${identifier}'`, function (err15, result15, fields15) {
                                                                                    if (err15) throw err15;
                                                                                    if(result15.length != 0){
                                                                                        result[0].UserLicenses = result15;
                                                                                    } else {
                                                                                        result[0].UserLicenses = null;
                                                                                    }
                                                                                    serverDatabaseCon.query(`SELECT * FROM vip WHERE identifier = '${identifier}'`, function (err16, result16, fields16) {
                                                                                        if (err16) throw err16;
                                                                                        if(result16.length != 0){
                                                                                            result[0].Vip = result14;
                                                                                        } else {
                                                                                            result[0].UserLicenses = null;
                                                                                        }
                                                                                        var ProductOBJ = {};
                                                                                        var ProductOBJ = new Object();
                                                                                        var ProductOBJ = [result[0]]
                                                                                        
                                                                                        fs.readFile('Datos/userData.json', 'utf8', function(err, data){
                                                                                            obj.push(ProductOBJ);
                                                                                            fs.writeFile('Datos/userData.json', JSON.stringify(obj, null, "\t"), err => {
                                                                                                if (err) {
                                                                                                    console.error(err);
                                                                                                    res.json({"Status": "Bad"});
                                                                                                } else {
                                                                                                    res.json({"Status": "Success", "Result": result[0], "Info": "Writting In File"});
                                                                                                }
                                                                                            });
                                                                                        });
                                                                                    })
                                                                                })
                                                                            })
                                                                        })
                                                                    })
                                                                })
                                                            })
                                                        })
                                                    })
                                                })
                                            });
                                        });
                                    });
                                });
                            });
                        } else {
                            res.json({"Status": "Bad"});
                        }
                    });
                }
            });
        } else {
            serverDatabaseCon.query(`SELECT * FROM users WHERE identifier = '${identifier}' `, function (err, result, fields) {
                if (err) throw err;
                if(result.length != 0){
                    //res.json({"Status": "Success", "Result": result[0]});
                    serverDatabaseCon.query(`SELECT * FROM addon_account_data WHERE owner = '${identifier}' `, function (err2, result2, fields2) {
                        if (err2) throw err2;
                        if(result2.length != 0){
                            //res.json({"Status": "Success", "Result": result[0]});
                            result[0].Sociedades = result2;
                        } else {
                            result[0].Sociedades = null;
                        }
                        serverDatabaseCon.query(`SELECT * FROM banlist WHERE identifier = '${identifier}' `, function (err3, result3, fields3) {
                            if (err3) throw err3;
                            if(result3.length != 0){
                                result[0].Banned = true;
                            } else {
                                result[0].Banned = false;
                            }
                            serverDatabaseCon.query(`SELECT * FROM billing WHERE identifier = '${identifier}' OR sender = '${identifier}'`, function (err4, result4, fields4) {
                                if (err4) throw err4;
                                if(result4.length != 0){
                                    result[0].BillingTransactions = result4;
                                } else {
                                    result[0].BillingTransactions = null;
                                }
                                serverDatabaseCon.query(`SELECT * FROM communityservice WHERE identifier = '${identifier}'`, function (err5, result5, fields5) {
                                    if (err5) throw err5;
                                    if(result5.length != 0){
                                        result[0].CommunityServices = result5;
                                    } else {
                                        result[0].CommunityServices = null;
                                    }
                                    serverDatabaseCon.query(`SELECT * FROM datastore_data WHERE owner = '${identifier}'`, function (err6, result6, fields6) {
                                        if (err6) throw err6;
                                        if(result6.length != 0){
                                            result[0].HouseData = result6;
                                        } else {
                                            result[0].HouseData = null;
                                        }
                                        serverDatabaseCon.query(`SELECT * FROM dk_vender WHERE seller = '${identifier}' OR buyer = '${identifier}'`, function (err7, result7, fields7) {
                                            if (err7) throw err7;
                                            if(result7.length != 0){
                                                result[0].CarsSelled = result7;
                                            } else {
                                                result[0].CarsSelled = null;
                                            }
                                            serverDatabaseCon.query(`SELECT * FROM owned_aircrafts WHERE owner = '${identifier}'`, function (err8, result8, fields8) {
                                                if (err8) throw err8;
                                                if(result8.length != 0){
                                                    result[0].Aircrafts = result8;
                                                } else {
                                                    result[0].Aircrafts = null;
                                                }
                                                serverDatabaseCon.query(`SELECT * FROM owned_boats WHERE owner = '${identifier}'`, function (err9, result9, fields9) {
                                                    if (err9) throw err9;
                                                    if(result9.length != 0){
                                                        result[0].Boats = result9;
                                                    } else {
                                                        result[0].Boats = null;
                                                    }
                                                    serverDatabaseCon.query(`SELECT * FROM owned_properties WHERE owner = '${identifier}'`, function (err10, result10, fields10) {
                                                        if (err10) throw err10;
                                                        if(result10.length != 0){
                                                            result[0].Properties = result10;
                                                        } else {
                                                            result[0].Properties = null;
                                                        }
                                                        serverDatabaseCon.query(`SELECT * FROM owned_vehicles WHERE owner = '${identifier}'`, function (err11, result11, fields11) {
                                                            if (err11) throw err11;
                                                            if(result11.length != 0){
                                                                result[0].Vehicles = result11;
                                                            } else {
                                                                result[0].Vehicles = null;
                                                            }
                                                            serverDatabaseCon.query(`SELECT * FROM tm1_membersgroups WHERE identifier = '${identifier}'`, function (err12, result12, fields12) {
                                                                if (err12) throw err12;
                                                                if(result12.length != 0){
                                                                    result[0].MafiaDetails = result12;
                                                                } else {
                                                                    result[0].MafiaDetails = null;
                                                                }
                                                                serverDatabaseCon.query(`SELECT * FROM user_licenses WHERE owner = '${identifier}'`, function (err13, result13, fields13) {
                                                                    if (err13) throw err13;
                                                                    if(result13.length != 0){
                                                                        result[0].UserLicenses = result13;
                                                                    } else {
                                                                        result[0].UserLicenses = null;
                                                                    }
                                                                    serverDatabaseCon.query(`SELECT * FROM vip WHERE identifier = '${identifier}'`, function (err14, result14, fields14) {
                                                                        if (err14) throw err14;
                                                                        if(result14.length != 0){
                                                                            result[0].Vip = result14;
                                                                        } else {
                                                                            result[0].UserLicenses = null;
                                                                        }
                                                                        var ProductOBJ = {};
                                                                        var ProductOBJ = new Object();
                                                                        var ProductOBJ = [result[0]]
                                                                        fs.writeFile('Datos/userData.json', JSON.stringify(ProductOBJ, null, "\t"), err => {
                                                                            if (err) {
                                                                              console.error(err);
                                                                              res.json({"Status": "Bad"});
                                                                            } else {
                                                                                res.json({"Status": "Success", "Result": result[0], "Info": "Saving New User in data file"});
                                                                            }
                                                                        });
                                                                    })
                                                                })
                                                            })
                                                        })
                                                    })
                                                })
                                            })
                                        })
                                    });
                                });
                            });
                        });
                    });
                } else {
                    res.json({"Status": "Bad"});
                }
            });
        }
    } catch(err) {
        console.error(err)
    }
});

router.post('/changeWeapons', (req, res) => {
    const ip = req.ip.substring(7);
    const { identifier, json } = req.body;
    var sql = `UPDATE users SET loadout = '${json}' WHERE identifier='${identifier}'`
    serverDatabaseCon.query(sql, function (err, result, fields) {
        if (err) throw err;
        if (!err){
            newLogUser(3, `Ha cambiado las armas del usuario con identifiacor: ${identifier}, JSON armas: ${json}`, 1, ip)
            res.json({"Status": "Success"});
        } else {
            res.json({"Status": "Bad"});
            throw err;
        }
    });
});

router.post('/addAviso', (req, res) => {
    var { staff, usuario, steam, licencia, razon, comentario } = req.body;
    const ip = req.ip.substring(7);
    var sql = "INSERT INTO panel_tickets (`staff`, `usuario`, `steamid`, `licencia`, `razon`, `comentarios`, `tiempo`, `tipo`, `status`) VALUES ('${staff}' ,'${usuario}' ,'${steam}' ,'${licencia}' ,'${razon}' ,'${comentario}' ,'Tiempo Indefinido' ,'6', '1')"
    var sqlModified = sql.replace("${staff}", staff).replace("${usuario}", usuario).replace("${steam}", steam).replace("${licencia}", licencia).replace("${razon}", razon).replace("${comentario}", comentario);
    serverDatabaseCon.query(sqlModified, function (err, result) {
        if (err){
            res.json({"Status": "Bad"});
            throw err;
        } else {
            newLogUser(6, `Ha añadido un aviso al usuario: ${usuario}`, 1, ip)
            res.json({"Status": "Success"});
        }
    });
})

router.post('/addBanTemp', (req, res) => {
    const ip = req.ip.substring(7);
    var { staff, usuario, steam, licencia, razon, comentario, tiempo } = req.body;
    var sql = "INSERT INTO panel_tickets (`staff`, `usuario`, `steamid`, `licencia`, `razon`, `comentarios`, `tiempo`, `tipo`, `status`) VALUES ('${staff}' ,'${usuario}' ,'${steam}' ,'${licencia}' ,'${razon}' ,'${comentario}' ,'${tiempo}' ,'2', '1')"
    var sqlModified = sql.replace("${staff}", staff).replace("${usuario}", usuario).replace("${steam}", steam).replace("${licencia}", licencia).replace("${razon}", razon).replace("${comentario}", comentario).replace("${tiempo}", tiempo);
    serverDatabaseCon.query(sqlModified, function (err, result) {
        if (err){
            res.json({"Status": "Bad"});
            throw err;
        } else {
            newLogUser(7, `Ha baneado temporalmente al usuario: ${usuario}`, 1, ip)
            res.json({"Status": "Success"});
        }
    });
})

router.post('/addBanPerm', (req, res) => {
    const ip = req.ip.substring(7);
    var { staff, usuario, steam, licencia, razon, comentario, tiempo } = req.body;
    var sql = "INSERT INTO panel_tickets (`staff`, `usuario`, `steamid`, `licencia`, `razon`, `comentarios`, `tiempo`, `tipo`, `status`) VALUES ('${staff}' ,'${usuario}' ,'${steam}' ,'${licencia}' ,'${razon}' ,'${comentario}' ,'Tiempo Indefinido' ,'3', '1')"
    var sqlModified = sql.replace("${staff}", staff).replace("${usuario}", usuario).replace("${steam}", steam).replace("${licencia}", licencia).replace("${razon}", razon).replace("${comentario}", comentario).replace("${tiempo}", tiempo);
    serverDatabaseCon.query(sqlModified, function (err, result) {
        if (err){
            res.json({"Status": "Bad"});
            throw err;
        } else {
            newLogUser(8, `Ha baneado permanentemente al usuario: ${usuario}`, 1, ip)
            res.json({"Status": "Success"});
        }
    });
})

router.post('/searchUser', (req, res) => {
    const { name } = req.body;
    const ip = req.ip.substring(7);
    if(name.length < 4) {
        res.json({"Status": "Bad", "Reason": "Username minim is 4 characters, your user has: " + name.length + " characters"});
    } else {
        var sql = "SELECT identifier, name, `group`, firstname, lastname FROM users WHERE name LIKE '%%name%' OR identifier LIKE '%%name2%' LIMIT 50"
        var sqlModified = sql.replace("%name", name).replace("%name2", name);
        serverDatabaseCon.query(sqlModified, function (err, result, fields) {
            if (err) throw err;
            newLogUser(13, `Ha buscado al usuario con nombre/identificador: ${name}`, 1, ip)
            res.json({"Status": "Success", "Result": result});
        })
    }
});

router.post('/deleteBan', (req, res) => {
    const { identifier } = req.body;
    const ip = req.ip.substring(7);
    var sql = `DELETE FROM banlist WHERE identifier = '${identifier}'`
    serverDatabaseCon.query(sql, function (err, result) {
        if (err) throw err;
        newLogUser(12, `Ha desbaneado al usuario con identificador: ${identifier}`, 1, ip)
        res.json({"Status": "Success"});
    })
});

router.get('/getCommandHistory', (req, res) => {
    apiDatabaseCon.query(`SELECT * FROM commandhistory ORDER BY ID DESC LIMIT 3`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            res.json({"Status": "Success", "Result": result});
        } else {
            res.json({"Status": "Bad"});
        }
    });
});

router.get('/getTicketHistory', (req, res) => {
    serverDatabaseCon.query(`SELECT * FROM panel_tickets ORDER BY ID DESC Limit 10`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            res.json({"Status": "Success", "Result": result});
        } else {
            res.json({"Status": "Bad"});
        }
    });
});

router.get('/getBanHistory', (req, res) => {
    serverDatabaseCon.query(`SELECT * FROM panel_tickets WHERE tipo = '3' OR tipo = '2' OR tipo='bantemp' OR tipo='5' LIMIT 20`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            res.json({"Status": "Success", "Result": result});
        } else {
            res.json({"Status": "Bad"});
        }
    });
});

router.post('/getTicketHistoryPost', (req, res) => {
    const { identifier } = req.body;
    var sql = `SELECT * FROM panel_tickets WHERE steamid = '${identifier}'`;
    serverDatabaseCon.query(sql, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            res.json({"Status": "Success", "Result": result});
        } else {
            res.json({"Status": "Bad"});
        }
    });
});

router.get('/getBanList', (req, res) => {
    const ip = req.ip.substring(7);
    serverDatabaseCon.query(`SELECT * FROM banlist ORDER BY identifier DESC Limit 30`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            newLogUser(11, `Ha visitado la pagina de usuarios baneados`, 0, ip)
            res.json({"Status": "Success", "Result": result});
        } else {
            res.json({"Status": "Bad"});
        }
    });
});

router.get('/getMafiaList', (req, res) => {
    const ip = req.ip.substring(7);
    serverDatabaseCon.query(`SELECT * FROM tm1_groups`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            newLogUser(16, `Ha visitado la lista de mafias`, 0, ip)
            res.json({"Status": "Success", "Result": result});
        } else {
            res.json({"Status": "Bad"});
        }
    });
});

router.get('/getMafia2List', (req, res) => {
    const ip = req.ip.substring(7);
    var sql = "SELECT * FROM jobs WHERE `name` LIKE '%mafia%'";
    serverDatabaseCon.query(sql, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            newLogUser(18, `Ha visitado la lista de bandas`, 0, ip)
            res.json({"Status": "Success", "Result": result});
        } else {
            res.json({"Status": "Bad"});
        }
    });
});

router.get('/cleanCache', (req, res) => {
    fs.unlink("Datos/dashboardInfo.json", (error) => {})
    fs.unlink("Datos/staffInfo.json", (error) => {})
    fs.unlink("Datos/userData.json", (error) => {})
    if(true){
        serverDatabaseCon.query(`SELECT accounts FROM users`, function (err, result, fields) {
            if (err) throw err;
            if(result.length != 0){
                var dineroMano = 0;
                var dineroBanco = 0;
                var dineroNegro = 0;
                for (let x in result) {
                    var obj = JSON.parse(result[x].accounts);
                    dineroMano += parseInt(obj.money);
                    dineroBanco += parseInt(obj.bank);
                    dineroNegro += parseInt(obj.black_money);
                }
                var total = dineroMano + dineroBanco;
                serverDatabaseCon.query(`SELECT accounts, name FROM users`, function (err, result, fields) {
                    if (err) throw err;
                    if(result.length != 0){
                        var userMoney = "";
                        var money = 0;
                        for (let x in result) {
                            var obj = JSON.parse(result[x].accounts);
                            var dinero = obj.black_money + obj.bank + obj.money;
                            if(dinero > money) {
                                money = dinero;
                                userMoney = result[x].name;
                            }
                        }
                        serverDatabaseCon.query(`SELECT COUNT(*) FROM users`, function (err, result, fields) {
                            if (err) throw err;
                            if(result.length != 0){
                                var ProductOBJ = {};
                                var ProductOBJ = new Object();
                                var ProductOBJ = {
                                    "dinero": [{
                                            "dineroMano": dineroMano
                                        },
                                        {
                                            "dineroBanco": dineroBanco
                                        },
                                        {
                                            "dineroNegro" : dineroNegro
                                        },
                                        {
                                            "total": total
                                        }
                                    ],
                                    "jugadorDinero": [{
                                            "usuario": userMoney,
                                            "dinero": money
                                        }
                                    ],
                                    "usersCount":[{
                                        "count" : result[0]["COUNT(*)"]
                                        }
                                    ]
                                }
                                fs.writeFile('Datos/dashboardInfo.json', JSON.stringify(ProductOBJ), err => {
                                    if (err) {
                                      console.error(err);
                                      res.json({"Status": "Bad"});
                                    } else {
                                        res.json({"Status": "Success"});
                                    }
                                });
                            } else {
                                res.json({"Status": "Bad"});
                            }
                        });
                    } else {
                        res.json({"Status": "Bad"});
                    }
                });
            } else {
                res.json({"Status": "Bad"});
            }
        });
    }
});

router.get('/getVipCount', (req, res) => {
    serverDatabaseCon.query(`SELECT COUNT(*) FROM vip`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            res.json({"Status": "Success", "Count": result[0]["COUNT(*)"]});
        }
    });
})

router.get('/getActivityLog', (req, res) => {
    fs.readFile('src/access.log', 'utf8', (err, data) => {
        if (err) {
          console.error(err);
          return;
        }
        var readed = 0;
        var obj = {};
        data.split(/\r?\n/).forEach(line =>  {
            readed = readed + 1;
            if(readed <= 600 && line != ''){
                const myArray = line.split(" ");
                var ip = myArray[0].replace("::ffff:", "");
                var date = myArray[3].substring(1);
                var method = myArray[5].substring(1);
                var url = myArray[6];
                var responseCode = myArray[8];
                if(method != 'OPTIONS'){
                    const logData = {
                        "IP": ip,
                        "Date": date,
                        "Method": method,
                        "URL": url,
                        "ResponseCode": responseCode,
                        "readed": readed
                    }
                    obj[readed - 1] = logData
                }
            }
        });
        res.json({"Status": "Success", "Result": obj});
    });
});

router.get('/saveData', (req, res) => {
    if(true){
        serverDatabaseCon.query(`SELECT accounts FROM users`, function (err, result, fields) {
            if (err) throw err;
            if(result.length != 0){
                var dineroMano = 0;
                var dineroBanco = 0;
                var dineroNegro = 0;
                for (let x in result) {
                    var obj = JSON.parse(result[x].accounts);
                    dineroMano += parseInt(obj.money);
                    dineroBanco += parseInt(obj.bank);
                    dineroNegro += parseInt(obj.black_money);
                }
                var total = dineroMano + dineroBanco;
                serverDatabaseCon.query(`SELECT accounts, name FROM users`, function (err, result, fields) {
                    if (err) throw err;
                    if(result.length != 0){
                        var userMoney = "";
                        var money = 0;
                        for (let x in result) {
                            var obj = JSON.parse(result[x].accounts);
                            var dinero = obj.black_money + obj.bank + obj.money;
                            if(dinero > money) {
                                money = dinero;
                                userMoney = result[x].name;
                            }
                        }
                        serverDatabaseCon.query(`SELECT COUNT(*) FROM users`, function (err, result, fields) {
                            if (err) throw err;
                            if(result.length != 0){
                                var ProductOBJ = {};
                                var ProductOBJ = new Object();
                                var ProductOBJ = {
                                    "dinero": [{
                                            "dineroMano": dineroMano
                                        },
                                        {
                                            "dineroBanco": dineroBanco
                                        },
                                        {
                                            "dineroNegro" : dineroNegro
                                        },
                                        {
                                            "total": total
                                        }
                                    ],
                                    "jugadorDinero": [{
                                            "usuario": userMoney,
                                            "dinero": money
                                        }
                                    ],
                                    "usersCount":[{
                                        "count" : result[0]["COUNT(*)"]
                                        }
                                    ]
                                }
                                fs.writeFile('Datos/dashboardInfo.json', JSON.stringify(ProductOBJ), err => {
                                    if (err) {
                                      console.error(err);
                                      res.json({"Status": "Bad"});
                                    } else {
                                        res.json({"Status": "Success"});
                                    }
                                });
                            } else {
                                res.json({"Status": "Bad"});
                            }
                        });
                    } else {
                        res.json({"Status": "Bad"});
                    }
                });
            } else {
                res.json({"Status": "Bad"});
            }
        });
    }
});

router.post('/rconCommand', (req, res) => {
    const { command, admin } = req.body; //`INSERT INTO 'api'.'commandhistory' ('Command', 'Method', 'Admin') VALUES ('${command}', 'RCON', '${admin}')
    var sql = 'INSERT INTO `api`.`commandhistory` (`Command`, `Method`, `Admin`) VALUES ("%s", "RCON", "%d")';
    var sqlModified = sql.replace("%s", command).replace("%d", admin);
    apiDatabaseCon.query(sqlModified, function (err, result, fields) {
        if (err){
            res.json({"Status": "Bad"});
            throw err;
        } else {
            conn.connect();
            conn.on('auth', function() {
            console.log("RCON authenticated");
            conn.send(command);
            }).on('response', function(str) {
                console.log("Response: " + str);
            }).on('error', function(err) {
                console.log("Error: " + err);
            }).on('end', function() {
                
                console.log("Connection closed");
                process.exit();
            });
            res.json({"Status": "Success"});
        }
    });
});

router.post('/ckUser', (req, res) => {
    const { identifier, admin, motivo } = req.body;
    const ip = req.ip.substring(7);
    var url = `http://83.63.50.145/demo1/dist/functions/CKWebhook.php?usuario=${identifier}&admin=${admin}&motivo=${motivo}`;

    var xhr = new XMLHttpRequest();
    xhr.open("GET", url);

    xhr.setRequestHeader("Accept", "application/json");

    xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        newLogUser(5, `Ha hecho un CK al usuario con identificador: ${identifier}`, 1, ip)
        /*serverDatabaseCon.query(`DELETE FROM users WHERE identifier = '${identifier}'`, function (err, result, fields) {
            if (err) throw err;
            serverDatabaseCon.query(`DELETE FROM billing WHERE identifier = '${identifier}'`, function (err, result, fields) {
                if (err) throw err;
                serverDatabaseCon.query(`DELETE FROM characters WHERE identifier = '${identifier}'`, function (err, result, fields) {
                    if (err) throw err;
                    serverDatabaseCon.query(`DELETE FROM communityservice WHERE identifier = '${identifier}'`, function (err, result, fields) {
                        if (err) throw err;
                        serverDatabaseCon.query(`DELETE FROM dpkeybinds WHERE id = '${identifier}'`, function (err, result, fields) {
                            if (err) throw err;
                            serverDatabaseCon.query(`DELETE FROM owned_aircrafts WHERE owner = '${identifier}'`, function (err, result, fields) {
                                if (err) throw err;
                                serverDatabaseCon.query(`DELETE FROM owned_properties WHERE owner = '${identifier}'`, function (err, result, fields) {
                                    if (err) throw err;
                                    serverDatabaseCon.query(`DELETE FROM owned_vehicles WHERE owner = '${identifier}'`, function (err, result, fields) {
                                        if (err) throw err;
                                        serverDatabaseCon.query(`DELETE FROM tm1_membersgroups WHERE identifier = '${identifier}'`, function (err, result, fields) {
                                            if (err) throw err;
                                            serverDatabaseCon.query(`DELETE FROM twitter_tweets WHERE realUser = '${identifier}'`, function (err, result, fields) {
                                                if (err) throw err;
                                                serverDatabaseCon.query(`DELETE FROM vip WHERE identifier = '${identifier}'`, function (err, result, fields) {
                                                    if (err) throw err;
                                                    res.json({"Status": "Success"});
                                                })
                                            })
                                        })
                                    })
                                })
                            })
                        })
                    })
                })
            })
        })*/
        res.json({"Status": "Success"});
    }};

    xhr.send();
});

router.post('/isUserOnline', (req, res) => {
    const { identifier } = req.body;
    var url = "https://servers-frontend.fivem.net/api/servers/single/mmlzra";

    var xhr = new XMLHttpRequest();
    xhr.open("GET", url);

    xhr.setRequestHeader("Accept", "application/json");

    xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        var obj = JSON.parse(xhr.responseText);
        var isOnline = false;
        for (let x in obj.Data.players) {
            if(identifier == obj.Data.players[x].identifiers[0]){
                isOnline = true;
            }
        }
        if(isOnline){
            res.json({"Status": "Success"});
        } else {
            res.json({"Status": "Bad"});
        }
    }};

    xhr.send();
});

router.get('/getOnlineUsers', (req, res) => {
    const ip = req.ip.substring(7);
    var url = "https://servers-frontend.fivem.net/api/servers/single/mmlzra";

    var xhr = new XMLHttpRequest();
    xhr.open("GET", url);

    xhr.setRequestHeader("Accept", "application/json");

    xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        var obj = JSON.parse(xhr.responseText);
        newLogUser(14, `Ha visitado la pagina de usuarios online`, 0, ip)
        res.json({"Status": "Success", "Result": obj.Data.players});
    }};

    xhr.send();
});

router.get('/usersCount', (req, res) => {
    try {
        if (fs.existsSync('Datos/dashboardInfo.json')) {
            fs.readFile('Datos/dashboardInfo.json', 'utf8', function(err, data){
                var obj = JSON.parse(data);
                res.json({"Status": "Success", "Result": obj.usersCount[0].count, "By": "SaveFile"});
            });
        } else {
            serverDatabaseCon.query(`SELECT COUNT(*) FROM users`, function (err, result, fields) {
                if (err) throw err;
                if(result.length != 0){
                    res.json({"Status": "Success", "Result": result[0]["COUNT(*)"]});
                } else {
                    res.json({"Status": "Bad"});
                }
            });
        }
    } catch(err) {
        console.error(err)
    }
});

router.get('/getMoney', (req, res) => {
    try {
        if (fs.existsSync('Datos/dashboardInfo.json')) {
            fs.readFile('Datos/dashboardInfo.json', 'utf8', function(err, data){
                var obj = JSON.parse(data);
                var mano = obj.dinero[0].dineroMano;
                var banco = obj.dinero[1].dineroBanco;
                var negro = obj.dinero[2].dineroNegro;
                var total = obj.dinero[3].total;
                res.json({"Status": "Success", "Mano": mano, "Banco": banco, "Negro": negro, "Total":total, "By": "SaveFile"});
            });
        } else {
            serverDatabaseCon.query(`SELECT accounts FROM users`, function (err, result, fields) {
                if (err) throw err;
                if(result.length != 0){
                    var dineroMano = 0;
                    var dineroBanco = 0;
                    var dineroNegro = 0;
                    for (let x in result) {
                        var obj = JSON.parse(result[x].accounts);
                        dineroMano += parseInt(obj.money);
                        dineroBanco += parseInt(obj.bank);
                        dineroNegro += parseInt(obj.black_money);
                    }
                    var total = dineroMano + dineroBanco;
                    res.json({"Status": "Success", "Mano": dineroMano, "Banco": dineroBanco, "Negro": dineroNegro, "Total": total});
                } else {
                    res.json({"Status": "Bad"});
                }
            });
        }
    } catch(err) {
        console.error(err)
    }
});

router.get('/getUserWithMoreMoney', (req, res) => {
    try {
        if (fs.existsSync('Datos/dashboardInfo.json')) {
            fs.readFile('Datos/dashboardInfo.json', 'utf8', function(err, data){
                var obj = JSON.parse(data);
                res.json({"Status": "Success", "Usuario": obj.jugadorDinero[0].usuario, "Dinero": obj.jugadorDinero[0].dinero, "By": "SaveFile"});
            });
        } else {
            serverDatabaseCon.query(`SELECT accounts, name FROM users`, function (err, result, fields) {
                if (err) throw err;
                if(result.length != 0){
                    var userMoney = "";
                    var money = 0;
                    for (let x in result) {
                        var obj = JSON.parse(result[x].accounts);
                        var dinero = obj.black_money + obj.bank + obj.money;
                        if(dinero > money) {
                            money = dinero;
                            userMoney = result[x].name;
                        }
                    }
                    res.json({"Status": "Success", "Usuario": userMoney, "Dinero": money});
                } else {
                    res.json({"Status": "Bad"});
                }
            });
        }
    } catch(err) {
        console.error(err)
    }
});

router.get('/getCurrentUsersCount', (req, res) => {
    var url = "https://servers-frontend.fivem.net/api/servers/single/mmlzra";

    var xhr = new XMLHttpRequest();
    xhr.open("GET", url);

    xhr.setRequestHeader("Accept", "application/json");

    xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        var obj = JSON.parse(xhr.responseText);
        res.json({"Status": "Success", "Result": obj.Data.clients});
    }};

    xhr.send();
});

router.post('/getMafiaMembers', (req, res) => {
    const ip = req.ip.substring(7);
    checkPermissions(ip).then(permisos => {
        if(permisos != null){
            if(parseInt(permissionsList[0].SeeMafiaMembers) <= parseInt(permisos)){
                const { mafiaID } = req.body;
                serverDatabaseCon.query(`SELECT * FROM tm1_membersgroups WHERE groupid = '${mafiaID}'`, function (err, result, fields) {
                    if (err) throw err;
                    if(result.length != 0){
                        newLogUser(16, `Ha consultado los miembros de la mafia con ID: ${mafiaID}`, 0, ip)
                        res.json({"Status": "Success", "Result": result});
                    } else {
                        res.json({"Status": "Bad"});
                    }
                });
            } else {
                res.json({"Status": "UnAllowed"});
            }
        }
    }).catch(() => {
        
    });
})

router.post('/getMafiaMembers2', (req, res) => {
    const ip = req.ip.substring(7);
    const { mafiaID } = req.body;
    serverDatabaseCon.query(`SELECT name,firstname,lastname,identifier,license,job_grade FROM users WHERE job = 'mafia${mafiaID}'`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            newLogUser(19, `Ha consultado los miembros de la mafia con ID: ${mafiaID}`, 0, ip)
            res.json({"Status": "Success", "Result": result});
        } else {
            res.json({"Status": "Bad"});
        }
    });
})

router.post('/getMafiaArmarios', (req, res) => {
    const ip = req.ip.substring(7);
    checkPermissions(ip).then(permisos => {
        if(permisos != null){
            if(parseInt(permissionsList[0].SeeMafiaMembers) <= parseInt(permisos)){
                const { mafiaID } = req.body;
                serverDatabaseCon.query(`SELECT * FROM datastore_data WHERE name = 'society_bandadr${mafiaID}'`, function (err, result, fields) {
                    if (err) throw err;
                    if(result.length != 0){
                        newLogUser(17, `Ha visitado el armario de la mafia con ID: ${mafiaID}`, 0, ip)
                        res.json({"Status": "Success", "Result": result});
                    } else {
                        res.json({"Status": "Bad"});
                    }
                });
            } else {
                res.json({"Status": "UnAllowed"});
            }
        }
    }).catch(() => {
        
    });
})

router.post('/getMafiaArmarios2', (req, res) => {
    const { mafiaID } = req.body;
    const ip = req.ip.substring(7);
    serverDatabaseCon.query(`SELECT * FROM datastore_data WHERE name = 'society_mafia0${mafiaID}'`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            newLogUser(20, `Ha visitado el armario de la mafia con ID: ${mafiaID}`, 0, ip)
            res.json({"Status": "Success", "Result": result});
        } else {
            res.json({"Status": "Bad"});
        }
    });
})

router.get('/getStaffList', (req, res) => {
    const ip = req.ip.substring(7);
    checkPermissions(ip).then(permisos => {
        if(permisos != null){
            if(parseInt(permissionsList[0].SeeStaffList) <= parseInt(permisos)){
                apiDatabaseCon.query(`SELECT * FROM users`, function (err, result, fields) {
                    if (err) throw err;
                    if(result.length != 0){
                        newLogUser(21, `Ha consultado los administradores del panel`, 0, ip)
                        res.json({"Status": "Success", "Result": result});
                    } else {
                        res.json({"Status": "Bad"});
                    }
                });
            } else {
                res.json({"Status": "UnAllowed"});
            }
        }
    }).catch(() => {
        
    });
})

router.post('/registerNewStaff', (req, res) => {
    const ip = req.ip.substring(7);
    checkPermissions(ip).then(permisos => {
        if(permisos != null){
            if(parseInt(permissionsList[0].SeeStaffList) <= parseInt(permisos)){
                const { usuario, password, nombreRango, permiso } = req.body;
                const passwordHashed = crypto.createHash('md5').update(password).digest('hex');
                var sql = "INSERT INTO users (`Username`, `Password`, `Permisos`, `Rango`) VALUES ('$usuario', '$password', '$permiso', '$rango')"
                var sqlModified = sql.replace("$usuario", usuario).replace("$password", passwordHashed).replace("$permiso", permiso).replace("$rango", nombreRango);
                apiDatabaseCon.query(sqlModified, function (err, result) {
                    if (err) throw err;
                    newLogUser(22, `Ha añadido un nuevo staff, usuario: ${usuario}, permiso: ${permiso}`, 1, ip)
                    res.json({"Status": "Success", "Result": result});
                });
            } else {
                res.json({"Status": "UnAllowed"});
            }
        }
    }).catch(() => {
        
    });
})

router.post('/getMafiaMembersInfo', (req, res) => {
    const { identifier } = req.body;
    const sql = `SELECT name, firstname, lastname, license FROM users WHERE identifier = '${identifier}'`;
    serverDatabaseCon.query(sql, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            res.json({"Status": "Success", "Result": result});
        } else {
            res.json({"Status": "Bad"});
        }
    });
})

router.get('/getCnpInfo', (req, res) => {
    const ip = req.ip.substring(7);
    serverDatabaseCon.query(`SELECT COUNT(*) FROM users WHERE job = 'cnp' OR job = 'offcnp'`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            //newLogUser(1, "Ha entrado a la pagina principal", 0, ip)
            res.json({"Status": "Success", "Result": result[0]["COUNT(*)"]});
        } else {
            res.json({"Status": "Bad"});
        }
    });
})

router.get('/getEmsInfo', (req, res) => {
    serverDatabaseCon.query(`SELECT COUNT(*) FROM users WHERE job = 'ambulance' OR job = 'offambulance'`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            res.json({"Status": "Success", "Result": result[0]["COUNT(*)"]});
        } else {
            res.json({"Status": "Bad"});
        }
    });
})

router.get('/getMechanicInfo', (req, res) => {
    serverDatabaseCon.query(`SELECT COUNT(*) FROM users WHERE job = 'mechanic' OR job = 'offmechanic' OR job = 'mechanic01' OR job = 'offmechanic01' or job = 'mechanic02' OR job = 'offmechanic02'`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            res.json({"Status": "Success", "Result": result[0]["COUNT(*)"]});
        } else {
            res.json({"Status": "Bad"});
        }
    });
})

router.get('/getMafiaInfo', (req, res) => {
    serverDatabaseCon.query(`SELECT COUNT(*) FROM users WHERE job = 'mafia01' OR job = 'mafia02' OR job = 'mafia03' OR job = 'mafia04' OR job = 'mafia05'`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            res.json({"Status": "Success", "Result": result[0]["COUNT(*)"]});
        } else {
            res.json({"Status": "Bad"});
        }
    });
})

router.get('/getUsersLog', (req, res) => {
    apiDatabaseCon.query(`SELECT * FROM logs ORDER BY DATE DESC LIMIT 200`, function (err, result, fields) {
        if (err) throw err;
        if(result.length != 0){
            res.json({"Status": "Success", "Result": result});
        } else {
            res.json({"Status": "Bad"});
        }
    });
})

router.get('/getMenuPermissions', (req, res) => {
    const ip = req.ip.substring(7);
    checkPermissions(ip).then(permisos => {
        const { mafiaID } = req.body;
        res.json(
            {
                "BanList": permissionsList[0].SeeBanList<=permisos,
                "OnlineUsers": permissionsList[0].SeeOnlineUsers<=permisos,
                "ModifiedUsers": permissionsList[0].SeeLastUsersModified<=permisos,
                "Mafias": permissionsList[0].SeeMafias<=permisos,
                "StaffList": permissionsList[0].SeeStaffList<=permisos,
                "LastActivity": permissionsList[0].SeeLastActivity<=permisos
            }
        );
    }).catch(() => {
        
        res.json({"Status": "Bad Promise"});
    });
})

module.exports = router;