function show() {
    document.getElementById('sidebar').classList.toggle('active');
}
let image_tracker = 'lu';
function change(){
    let image = document.getElementById('lamp-uit');
    if(image_tracker == 'lu'){
        image.src = '/Images/lamp-aan.png';
        image_tracker = 'la';
    }
    else{
        image.src = '/Images/lamp-uit.png';
        image_tracker = 'lu';
    }
}