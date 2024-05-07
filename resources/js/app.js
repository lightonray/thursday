import './bootstrap';

import './bot_logic';

import './account_balance';

if(document.querySelector("#submitBtnConnector") != undefined){
    import ('./exchange_connector');
}

if(document.querySelector("#submitBtnBot") != undefined){
    import ('./add_bot');
}

if(document.querySelector("#botModal") != undefined){
    import ('./add_bot');
}

if(document.querySelector(".add-strategy") != undefined){
    import ('./add_strategy');
}

