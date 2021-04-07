function show() {
    document.getElementById('sidebar').classList.toggle('active');
}

// let image_tracker = 'lu';
// function change(){
//     let image = document.getElementById('lamp-uit');
//     if(image_tracker == 'lu'){
//         image.src = 'Images/lamp-aan.png';
//         image_tracker = 'la';
//     }
//     else{
//         image.src = 'Images/lamp-uit.png';
//         image_tracker = 'lu';
//     }
// }

const button1 = document.getElementById('lichtbtn');
const button2 = document.getElementById('lichtbtn2');
const button3 = document.getElementById('lichtbtn3');
let image_tracker = 'lu';
let image2_tracker = 'lu';
let image3_tracker = 'lu';

button1.addEventListener('click', () => {


    let image = document.getElementById('lamp-uit');
    if(image_tracker == 'lu'){
        image.src = 'Images/lamp-aan.png';
        image_tracker = 'la';
    }
    else{
        image.src = 'Images/lamp-uit.png';
        image_tracker = 'lu';
    }
}
);



    
button2.addEventListener('click', () => {


    let image2 = document.getElementById('lamp-uit2');
    if(image2_tracker == 'lu'){
        image2.src = 'Images/lamp-aan.png';
        image2_tracker = 'la';
    }
    else{
        image2.src = 'Images/lamp-uit.png';
        image2_tracker = 'lu';
    }
}
);


    
button3.addEventListener('click', () => {


    let image3 = document.getElementById('lamp-uit3');
    if(image3_tracker == 'lu'){
        image3.src = 'Images/lamp-aan.png';
        image3_tracker = 'la';
    }
    else{
        image3.src = 'Images/lamp-uit.png';
        image3_tracker = 'lu';
    }
}
);