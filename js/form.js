/* JS Document */

var cities = {
  Bulgarien: ["Region wählen:", "Albena", "Goldener Sand", "St. Konstantin und Helena", "Sonniger Strand", "Pomorie"],
  Bahamas: ["Region wählen:", "Nassau", "Insel Grand Bahama", "Andros"],
  Brasilien: ["Region wählen:", "Rio da Janeiro", "Iguazu", "Buzios"],
  Vietnam: ["Region wählen:", "Nha Trang", "Phan Thiet"],
  Ungarn: ["Region wählen:", "Balaton", "Heviz"],
  Griechenland: ["Region wählen:", "Insel Kreta", "Insel Rhodos", "Insel Korfu", "Insel Zakynthos", "Halbinsel Chalkidiki"],
  DominikanischeRepublik: ["Region wählen:", "Punta Cana", "Boca Chica", "La Romano", "Puerto Plata"],
  Georgia: ["Region wählen:", "Batumi", "Bakuriani", "Kobuleti", "Bordschomi"],
  Israel: ["Region wählen:", "Netanja", "Elat", "Totes Meer"],
  Indonesien: ["Region wählen:", "Insel Bali", "Insel Lambok"],
  Jordanien: ["Region wählen:", "Akaba", "Totes Meer"],
  Spanien: ["Region wählen:", "Costa Brava", "Costa Dorada", "Costa Blanca", "Costa del Maresme", "Mallorca", "Kanarische Inseln"],
  Italien: ["Region wählen:", "Rimini", "Sizilien", "Lido di Jesolo", "Sardinien", "Insel Ischia", "Kalabrien", "Ligurien"],
  China: ["Region wählen:", "Hainan-Insel"],
  Zypern: ["Region wählen:", "Ayia Napa", "Pathos", "Limassol", "Larnaka", "Protaras"],
  Kuba: ["Region wählen:", "Varadero"],
  Mauritius: ["Region wählen:", "Alle"],
  Malaysia: ["Region wählen:", "Insel Langkawi", "Kuala Lumpur", "Insel Borneo"],
  Malediven: ["Region wählen:", "Alle"],
  Malta: ["Region wählen:", "Alle"],
  Mexiko: ["Region wählen:", "Yucatan Halbinsel", "Cancun", "Acapulco"],
  VAE: ["Region wählen:", "Dubai", "Schardscha", "Ras al-Chaima", "Fudschaira", "Ajman", "Abu Dhabi"],
  Oman: ["Region wählen:", "Alle"],
  Portugal: ["Region wählen:", "Insel Madeira", "Algarve", "Riviera von Lissabon", "Azoren"],  
  Russland: ["Region wählen:", "Sotschi"],
  Seychellen: ["Region wählen:", "Insel Mahé", "Insel Praslin", "Insel La Digue"],
  Singapur: ["Region wählen:", "Singapur", "Insel Sentosa"],
  Slowenien: ["Region wählen:", "Adriaküste", "Rogaška Slatina"],
  USA: ["Region wählen:", "Miami", "Hawaiianische Inseln"],
  Thailand: ["Region wählen:", "Pattaya", "Insel Phuket", "Koh Samui", "Insel Chang"],
  Kroatien: ["Region wählen:", "Halbinsel Istrien", "Dalmatien", "Dubrovnik", "Pula", "Split"],
  Montenegro: ["Region wählen:", "Riviera von Budva", "Riviera von Bar", "Herceg Novi", "Ulcinj", "Tivat"],
  SriLanka: ["Region wählen:", "Kalutara", "Hikkaduwa", "Kogalla", "Bentota"],
  Südafrika: ["Region wählen:", "Kapstadt", "Sun City", "Johannesburg"],
  
  reg: ["Region wählen:"]
};
var country = document.getElementById("country");
var city = document.querySelector("#city");
window.onload = selectCountry;
country.onchange = selectCountry;

function selectCountry(ev) {
  city.innerHTML = "";
  var c = this.value  || "", o;
  for (let i = 0; i < cities[c].length; i++) {
    o = new Option(cities[c][i],cities[c][i],false,false);  
    city.add(o);
  } 
}



// Убавляем кол-во по клику
$('.quantity_inner .bt_minus').click(function() {
    let $input = $(this).parent().find('.quantity');
    let count = parseInt($input.val()) - 1;
    count = count < 0 ? 0 : count;
    $input.val(count);
});
// Прибавляем кол-во по клику
$('.quantity_inner .bt_plus').click(function() {
    let $input = $(this).parent().find('.quantity');
    let count = parseInt($input.val()) + 1;
    count = count > parseInt($input.data('max-count')) ? parseInt($input.data('max-count')) : count;
    $input.val(parseInt(count));
}); 
// Убираем все лишнее и невозможное при изменении поля
$('.quantity_inner .quantity').bind("change keyup input click", function() {
    if (this.value.match(/[^0-9]/g)) {
        this.value = this.value.replace(/[^0-9]/g, '');
    }
    if (this.value == "") {
        this.value = 1;
    }
    if (this.value > parseInt($(this).data('max-count'))) {
        this.value = parseInt($(this).data('max-count'));
    }  	
    
});    

$(function(){
    $('input[name="zimm"]').val("0");
 
    $('form').submit(function (e) {
        if ($('input[name="zimm"]').val() == "0") {
            $('input[name="zimm"]').focus();
            e.preventDefault();
        }
    });
	
	$('input[name="erw"]').val("0");
 
    $('form').submit(function (f) {
        if ($('input[name="erw"]').val() == "0") {
            $('input[name="erw"]').focus();
            f.preventDefault();
        }
    });
	
	$('input[name="kind"]').val("0");
 
    $('form').submit(function (g) {
        if ($('input[name="kind"]').val() == "") {
            $('input[name="kind"]').focus();
            g.preventDefault();
			
        }
    });

});
