// Hier worden de ingeladen apparaten uit de JSON file opgeslagen
let apparaten = [];

// Deze functie is de start
const startCalculator = () => {
  // Inladen van JSON bestand
  laadJSON("/Data/apparaten.json");
};

const laadJSON = (url) => {
  // het XMLHttpRequest object maken
  const aanvraag = new XMLHttpRequest();

  // Omschrijf wat er moet gebeuren ALS je de data succesvol binnen hebt
  aanvraag.onreadystatechange = () => {
    if (aanvraag.readyState === 4 && aanvraag.status === 200) {
      let jsonText = aanvraag.responseText;
      // console.log(jsonText);
      apparaten = JSON.parse(jsonText);
      // console.log(apparaten);
      toonApparaten();
      // HIER KOMT CODE DIE UITGELEGD WORDT IN DE VIDEO
    }
  };
 
  // serveraanvraag specificeren
  aanvraag.open("GET", url, true);

  // aanvraag versturen
  aanvraag.send();
};

const toonApparaten = () => {
  //  Sla alle div's met de class "appraat" iop in de variabele containerDivs
  const apparaatDivs = document.querySelectorAll(".apparaat");
  // console.log(apparaatDivs);
  
// Gebruik een forEach loop om elk aparaat div te verwerken
apparaatDivs.forEach((apparaatDiv) => {
    // Haal de code van het apparaat op uit het attribuut "data-id"
    const code = apparaatDiv.attributes["data-id"].value;
    // console.log(code);

    // Zoek met deze het appraat op in de ingeladen appraten (uit het JSON bestand)
    const apparaat = apparaten.find((value) => {
      return value.code === code;
    });

    // Zet alle benodigde informatie in een zelfgemaakt object
    let data = {
        container: apparaatDiv,
        apparaat: apparaat,
        weergave: 'kosten',
        prijs_Kwh: 0.20
    };

    // console.log(data);

    // Geef het data object aan de maakWidget function.
    maakWidget(data);

  });

};

const maakWidget = (data) => {
  // Nu gaan we de data gebruiken om alles in te vullen

  // De div uit het data object halen en in eigen variabele zetten voor het gemak
  const apparaatDiv = data.container;

  // Eerst alle HTML elementen ophalen uit de container div
  const slider = apparaatDiv.querySelector("input");
  const minuten = apparaatDiv.querySelector("span");
  const knop = apparaatDiv.querySelector("button");

  // HIER KOMT CODE DIE UITGELEGD WORDT IN DE VIDEO
  apparaatDiv.style.backgroundImage = `url(${data.apparaat.image})`;

  slider.addEventListener("input", (event) => {
    minuten.innerHTML = slider.value;
    updateGegevens(data);
  });

  knop.addEventListener("click", () => {
    if (knop.innerText === "Toon verbruik") {
        data.weergave = "verbruik";
        knop.innerText = "Toon kosten";
    } else {
        data.weergave = "kosten";
        knop.innerText = "Toon verbruik";
    }
    updateGegevens(data);
});

updateGegevens(data);
};

const updateGegevens = (data) => {
  // De div uit het data object halen en in eigen variabele zetten voor het gemak
  const apparaatDiv = data.container;

  // De afzonderlijke elementen ophalen
  const titel = apparaatDiv.querySelector("div");
  const nummer = apparaatDiv.querySelector("h2");
  const slider = apparaatDiv.querySelector("input");

  // HIER KOMT CODE DIE UITGELEGD WORDT IN DE VIDEO
  titel.innerHTML = data.apparaat.naam;

  const minutenPerDag = parseInt(slider.value); 
   // Kijken of we de kosten of het verbruik willen zien
  if (data.weergave === "kosten") {
    let jaarlijkseKosten = berekenJaarKosten(minutenPerDag, data.apparaat.vermogen);
    nummer.innerHTML = "€ " + jaarlijkseKosten + " per jaar";
  } else {
    let jaarlijksVerbruik = berekenJaarVerbruik( minutenPerDag, data.apparaat.vermogen);
    nummer.innerHTML = jaarlijksVerbruik + " KwH";
  }
};

const berekenJaarVerbruik = (minuten_per_dag, vermogen) => {
  // HIER KOMT CODE DIE UITGELEGD WORDT IN DE VIDEO
  
  const minutenPerJaar = minuten_per_dag * 365;
  const urenPerJaar = minutenPerJaar / 60;
  const wattPerJaar = urenPerJaar * vermogen;
  const kwhPerJaar = wattPerJaar / 1000;

  return kwhPerJaar.toFixed(2);
};

const berekenJaarKosten = (minuten_per_dag, vermogen) => {
  // HIER KOMT CODE DIE UITGELEGD WORDT IN DE VIDEO

  const prijsPerKwH = 0.2;
  const kwhPerJaar = berekenJaarVerbruik(minuten_per_dag, vermogen);
  const price = kwhPerJaar * prijsPerKwH;

  return price.toFixed(2);
};

// const laadJSON = (url) => 

//Hier begint alles.
window.addEventListener("DOMContentLoaded", startCalculator);
