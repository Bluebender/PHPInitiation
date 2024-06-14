var inputs = document.querySelectorAll("input");
for (var input of inputs) {
    if (input.hasAttribute('required')) {
        input.onblur = testValideChampRequis;
    }
}

function testValideChampRequis() {
    if (this.value === '') {
        var champ = this.getAttribute('frenchName');
        alert('Veuillez compléter le champ ' + champ + '.');
    }
}