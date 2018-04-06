var casper = require('casper').create();
var lesTitres;

function getTitres() {
    var lesTitres = document.querySelectorAll('.domaineDetails');
    var listTitres = [];
    for (var i=0; i <lesTitres.length;i++){
    	var titre = {};
    	var f= lesTitres[i].querySelector('h3');
    	titre['title'] = f.innerHTML;
    	listTitres.push(titre);
    };
   return listTitres;
}

casper.start('https://www.aformac.fr/');

casper.then(function () {
    lesTitres = this.evaluate(getTitres);
});

casper.run(function () {
	casper.echo("Les formations chez AFORMAC :", 'INFO');
    for(var i in lesTitres) {
        casper.echo(lesTitres[i].title , 'PARAMETER');
    }
    casper.exit();
});
