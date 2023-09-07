
function deactivateTooltips() {

    var tooltips = document.querySelectorAll('.tooltip'),
        tooltipsLength = tooltips.length;

    for (var i = 0; i < tooltipsLength; i++) {
        tooltips[i].style.display = 'none';
    }

}

function getTooltip(elements) {

    while (elements = elements.nextSibling) {
        if (elements.className === 'tooltip') {
            return elements;
        }
    }

    return false;

}



var check = {}; 

check['nom'] = function(id) {

    var name = document.getElementById(id),
        tooltipStyle = getTooltip(name).style;

    if (name.value.length >= 4) {
        name.className = 'correct';
        tooltipStyle.display = 'none';
        return true;
    } else {
        
        tooltipStyle.display = 'contents';
        return false;
    }

};

check['prenom'] = check['nom']; 



check['mdp'] = function() {

    var pwd1 = document.getElementById('mdp'),
        tooltipStyle = getTooltip(pwd1).style;

    if (pwd1.value.length >= 6) {
        pwd1.className = 'correct';
        tooltipStyle.display = 'none';
        return true;
    } else {
        tooltipStyle.display = 'contents';
        return false;
    }

};



check['region'] = function() {

    var country = document.getElementById('region'),
        tooltipStyle = getTooltip(country).style;

    if (country.options[country.selectedIndex].value != 'none') {
        tooltipStyle.display = 'none';
        return true;
    } else {
        tooltipStyle.display = 'contents';
        return false;
    }

};
check['prof'] = function() {

    var prof = document.getElementById('prof'),
        tooltipStyle = getTooltip(prof).style;

    if (prof.options[prof.selectedIndex].value != 'none') {
        tooltipStyle.display = 'none';
        return true;
    } else {
        tooltipStyle.display = 'contents';
        return false;
    }

};


(function() { 
    var myForm = document.getElementById('myForm'),
        inputs = document.querySelectorAll('input[type=text], input[type=password]'),
        inputsLength = inputs.length;

    for (var i = 0; i < inputsLength; i++) {
        inputs[i].addEventListener('keyup', function(e) {
            check[e.target.id](e.target.id); 
        });
    }

    myForm.addEventListener('submit', function(e) {

        var result = true;

        for (var i in check) {
            result = check[i](i) && result;
        }

        if (result) {
            alert('Le formulaire est bien rempli.');
        }

        e.preventDefault();

    });

    myForm.addEventListener('reset', function() {

        for (var i = 0; i < inputsLength; i++) {
            inputs[i].className = '';
        }

        deactivateTooltips();

    });

})();

deactivateTooltips();