const orderBtn = document.querySelector('.wrapper_order_background button')
const orderBox = document.querySelector('#order');
const exit = document.querySelector('#order_box_toggler');

const addBtns = Array.from(document.querySelectorAll('._wrapper_menu_content_top button'));
const pizzaNameElement = Array.from(document.querySelectorAll('._wrapper_menu_content_top h3'));
const pizzaPriceElement = Array.from(document.querySelectorAll('._wrapper_menu_content_top h4'));

const basket = document.querySelector('#basket');

const arrayWithPrice = [];
const arrayWithPizzaNames = [];
const whichWantEat = [];

for (i = 0; i < pizzaNameElement.length; i++) {
    arrayWithPrice.push(pizzaPriceElement[i].textContent.split(' ')[0]);
    arrayWithPizzaNames.push(pizzaNameElement[i].textContent);
}

const costElement = document.querySelector('#cost');
const nameOfCost = document.querySelector('#nameOfCost');
const orderList = document.querySelector('#order_box_summary_food');

function createList() {
    orderList.innerHTML = "";
    for (i = 0; i < whichWantEat.length; i++) {
        const newListElement = document.createElement("li");
        newListElement.innerHTML = `<span>${arrayWithPizzaNames[whichWantEat[i]]}</span><span>${arrayWithPrice[whichWantEat[i]]} PLN</span><button>Usuń</button>`
        orderList.appendChild(newListElement)
    }

    let costAmmount = 0;
    for (i = 0; i < whichWantEat.length; i++) {
        costAmmount += Number(arrayWithPrice[whichWantEat[i]]);
        console.log(costAmmount);
    }

    if (costAmmount != 0) {
        costElement.innerText = `${Math.round(costAmmount * 1000) / 1000} PLN`;
        nameOfCost.innerText = "Do zapłaty:";
    }
    else {
        costElement.innerText = '';
        nameOfCost.innerText = '';
    }
}

//this is only bug to repair because i don't know why can delete only one position. its should work! \\\\////
function deletePosition(x) {
    whichWantEat.splice(x, 1)
    document.querySelector('#basket span').innerText = whichWantEat.length
    createList()
}

//////\\\\\\\\\\\\



function showOrder() {
    orderBox.classList.add('activeOrderBox')
    createList()

    let btnsToRemove = Array.from(document.querySelectorAll('#order_box_summary_food button'));

    for (i = 0; i < btnsToRemove.length; i++) {
        btnsToRemove[i].addEventListener('click', (event) => {
            deletePosition(btnsToRemove.indexOf(this.event.target))
        })
    }
}

//open order box
orderBtn.addEventListener('click', () => {
    showOrder()
})

//exit order box
exit.addEventListener('click', () => {
    orderBox.classList.remove('activeOrderBox');
})

//arrays with informations of order

for (i = 0; i < addBtns.length; i++) {
    addBtns[i].addEventListener('click', (event) => {
        whichWantEat.push(addBtns.indexOf(this.event.target))
        if (whichWantEat.length > 0) {
            basket.classList.add('activeBasket');
            document.querySelector('#basket span').innerText = whichWantEat.length
        }
        else {
            basket.classList.remove('activeBasket');
        }
    })
}

basket.addEventListener('click', () => {
    showOrder()
})