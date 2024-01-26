const getlocation = () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        alert("Geolocation is not supported by this browser");
    }
};

const showPosition = (position) => {
    let lat = position.coords.latitude;
    let long = position.coords.longitude; // Fix: gebruik longitude in plaats van latitude voor lengtegraad

    const des = document.querySelector("p");
    des.innerHTML = `Latitude: ${lat}<br>Longitude: ${long}`;
};

const showError = (error) => {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            alert("User denied the request for Geolocation");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Location information is unavailable");
            break;
        case error.TIMEOUT:
            alert("The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred.");
            break;
        default:
            alert("An unknown error occurred.");
    }
};
