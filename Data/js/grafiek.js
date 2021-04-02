const startGrafiek = () => {
    maakGrafiek();
}

const maakGrafiek = () => {
    // Hier gaan we de chart maken
    new Chartist.Bar('#grafiek', {
    "labels": ["Maandag", "Dinsdag", "Woensdag", "Donderdag","Vrijdag","Zaterdag","Zondag"],
    "series": [[2000,2431, 2881, 3102,3463,3821,4234]]
  });
}

window.addEventListener('DOMContentLoaded', startGrafiek);



const startGrafiek1 = () => {
  maakGrafiek1();
}

const maakGrafiek1 = () => {
  // Hier gaan we de chart maken
  new Chartist.Line('#grafiek1', {
  "labels": ["Maandag", "Dinsdag", "Woensdag", "Donderdag","Vrijdag","Zaterdag","Zondag"],
  "series": [[23.2,27.9,32.1 ,36 ,39.7,44.9,49.3]]
});
}

window.addEventListener('DOMContentLoaded', startGrafiek1);

// const laadJSON = (url) => {
//     // het XMLHttpRequest object maken
//     const aanvraag = new XMLHttpRequest();

//     // Omschrijf wat er moet gebeuren ALS je de data succesvol binnen hebt
//     aanvraag.onreadystatechange = () => {
//       if (aanvraag.readyState === 4 && aanvraag.status === 200) {
//         let jsonText = aanvraag.responseText;
//         data = JSON.parse(jsonText);
//         maakGrafiek(data);
//       }
//     };
    
//     // serveraanvraag specificeren
//     aanvraag.open("GET", url, true);
  
//     // aanvraag versturen
//     aanvraag.send();
// }

