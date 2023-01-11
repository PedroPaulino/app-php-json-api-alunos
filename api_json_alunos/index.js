const express = require('express');
const app = express();

const alunos = [
    {
        nome: 'João',
        matricula: 123,
        curso: 'Análise e Desenvolvimento de Sistemas',
        sigla: 'ADS'
    },
    {
        nome: 'Pedro',
        matricula: 456,
        curso: 'Redes de Computadores',
        sigla: 'RC'
    }
];

app.get('/', function(req, res){
    res.send(alunos);
})

app.listen(8080,()=>{
    console.log("Servidor está escutando na porta 8080");
});