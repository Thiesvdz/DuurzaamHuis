const startGrafiek = () => {
    // Hier komt de jouw code die na het laden van de pagina wordt uitgevoerd
    laadJSON("Data/data.json");
}

const laadJSON = (url) => {
    // het XMLHttpRequest object maken
    const aanvraag = new XMLHttpRequest();

    // Omschrijf wat er moet gebeuren ALS je de data succesvol binnen hebt
    aanvraag.onreadystatechange = () => {
      if (aanvraag.readyState === 4 && aanvraag.status === 200) {
        let jsonText = aanvraag.responseText;
        data = JSON.parse(jsonText);
        maakGrafiek(data);
      }
    };
    
    // serveraanvraag specificeren
    aanvraag.open("GET", url, true);
  
    // aanvraag versturen
    aanvraag.send();
}
const maakGrafiek = () => {
    // Hier gaan we de chart maken
    new Chartist.Line('#grafiek', data);
}

// Wacht tot de pagina is geladen, dan pas de startGrafiek functie uitvoeren
window.addEventListener('DOMContentLoaded', startGrafiek);