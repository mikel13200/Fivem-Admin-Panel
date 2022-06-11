const express = require('express');
const app = express();
const colors = require('colors');
const morgan = require('morgan');
const cors = require('cors');
const fs = require("fs");
const { Console } = require('console');
var path = require('path')

const port = 5000;

//settings
const maxMbCache = 10;
//middlewares
app.use(morgan('common', {
    stream: fs.createWriteStream(path.join(__dirname, 'access.log'), { flags: 'a' })
}))
app.use(express.urlencoded({extended: false}));
app.use(express.json());
app.use(cors({
    origin: '*'
}));

//routes
app.use('/api/', require('./routes/routes.js'))
app.use('/api/', require('./routes/testing.js'))

//var timer = setInterval(checkCache, 1200000);

app.listen(port, () => {
    console.log(colors.bgBlack.green(`Server listening on port: ${port}`))
});

function roundOff(value)
{
    return Math.round(value*100)/100;
}

function checkCache(){
    console.log(colors.bgBlack.yellow("Checking Cache Size"));
    let filePath = 'Datos/userData.json';
    fs.unlink("access.log", (error) => {})
    fs.stat(filePath, (error,stats)=>{
        if(error)
        {
            console.log(error);
            return;
        }
        
        let fileSize = stats.size;
        let fileSizeKB = roundOff(fileSize*0.001);
        let fileSizeMB = roundOff(fileSizeKB*0.001);
        if(fileSizeMB > maxMbCache){
            console.log("Deleting Cache userData");
            fs.unlink("Datos/userData.json", (error) => {})
        }
    });

    let filePath2 = 'Datos/staffInfo.json';
    fs.stat(filePath2, (error2,stats2)=>{
        if(error2)
        {
            console.log(error2);
            return;
        }
        
        let fileSize = stats2.size;
        let fileSizeKB = roundOff(fileSize*0.001);
        let fileSizeMB = roundOff(fileSizeKB*0.001);
        if(fileSizeMB > maxMbCache){
            console.log("Deleting Cache staffInfo");
            fs.unlink("Datos/staffInfo.json", (error) => {})
        }
    });
}