document.getElementById('calculateBtn').addEventListener("click", calculateFibonacci);

function calculateFibonacci(event){

    let inputs = document.getElementById("fibonacciFrm").elements;

    if( !inputs['number'].value.length ){
        return;
    }

    fetch('./fibonacci.php', {
        method: "POST",
        body: JSON.stringify( {number: inputs['number'].value } ),
        headers: {"Content-type": "application/json; charset=UTF-8"}
    })
    .then(response => response.json())
    .then(function (res){

        let ul = document.getElementById('fibonacciResponseUl');
        while(ul.firstChild) ul.removeChild(ul.firstChild);

        res.data.forEach(e => {
            let li = document.createElement('li');
            li.innerHTML = `${e}`;
            ul.appendChild(li);
        });// forEach 

    })
    .catch(function (error) {
        console.log('error',error);
    });
}