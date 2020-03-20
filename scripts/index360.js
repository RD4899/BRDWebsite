backbtn = document.getElementById("back");
forwardbtn = document.getElementById("next");

sceneContain = document.getElementById("sceneIdentifier");
imgLocation = document.getElementById("image-360");
StringLoc = document.getElementById("location");

forwardbtn.addEventListener('click', Next);
backbtn.addEventListener('click', Back);

window.addEventListener('load', LoadPano);

const locations = [
    {
        location: 'Pembrey',
        image: '/media/images/360IndexPembrey.jpg',
        markers: [
            {
                panel: '/media/images/IndexLogin.jpg',
                link: '/root/login.html',
                position: '0 -3.5 -25',

            },
            {
                panel: '/media/images/IndexAbout.jpg',
                link: '/root/about.php',
                position: '14 -6 -20',

            },
            {
                panel: '/media/images/IndexGallery.jpg',
                link: '/root/gallery.html',
                position: '-20 -3.5 -18',

            },
            {
                panel: '/media/images/IndexShop.jpg',
                link: '/root/shop.html',
                position: '45 13 10',

            }
        ],
    },
    {
        location: 'Gower',
        image: '/media/images/360IndexGower.jpg',
        markers: [
            {
                panel: '/media/images/IndexLogin.jpg',
                link: '/root/login.html',
                position: '-20 3.5 -25',
            },
            {
                panel: '/media/images/IndexAbout.jpg',
                link: '/root/about.php',
                position: '-38 4.5 10',

            },
            {
                panel: '/media/images/IndexGallery.jpg',
                link: '/root/gallery.html',
                position: '9 0.5 17',

            },
            {
                panel: '/media/images/IndexShop.jpg',
                link: '/root/shop.html',
                position: '8 0.5 -17',

            }
        ],
    },
    {
        location: 'Valleys',
        image: '/media/images/360IndexValleys.jpg',
        markers: [
            {
                panel: '/media/images/IndexLogin.jpg',
                link: '/root/login.html',
                position: '-2 0 -5',
            },
            {
                panel: '/media/images/IndexAbout.jpg',
                link: '/root/about.php',
                position: '-38 0 -5',
            },
            {
                panel: '/media/images/IndexGallery.jpg',
                link: '/root/gallery.html',
                position: '9 0 -5',
            },
            {
                panel: '/media/images/IndexShop.jpg',
                link: '/root/shop.html',
                position: '18 0 -5',
            }
        ],
    }];

let locationCount = 0;

function LoadCamera() {
    getCamera = document.querySelector("#camera");
    sceneContain.removeChild(getCamera);

    newCamera = document.createElement('a-entity');
    newCamera.setAttribute('id', 'camera');
    newCamera.setAttribute('camera', '');
    newCamera.setAttribute('position', '0 0 0');
    newCamera.setAttribute('rotation', '0 180 0');
    newCamera.setAttribute('wasd-controls', '');
    newCamera.setAttribute('look-controls', '');
    sceneContain.appendChild(newCamera);
}

function LoadPano() {
    StringLoc.innerHTML = locations[locationCount].location;
    imgLocation.src = locations[locationCount].image;
    LoadCamera();
    NewMarkers();
}

function Next() {
    locationCount++;
    CheckCount();
    StringLoc.innerHTML = locations[locationCount].location;
    imgLocation.src = locations[locationCount].image;
    NewScene();
    LoadCamera();
    NewMarkers();
}

function Back() {
    locationCount--;
    CheckCount();
    StringLoc.innerHTML = locations[locationCount].location;
    imgLocation.src = locations[locationCount].image;
    NewScene();
    LoadCamera();
    NewMarkers();
}

function CheckCount() {
    if (locationCount > locations.length - 1) {
        locationCount = 0;
    }
    else if (locationCount < 0) {
        locationCount = locations.length - 1;
    }
}

function NewScene() {
    scene = document.getElementsByTagName("a-sky");
    scene[0].parentNode.removeChild(scene[0]);
    newScene = document.createElement('a-sky');
    newScene.setAttribute('src', '#image-360');
    newScene.setAttribute('rotation', '0 -25 0');
    newScene.setAttribute('position', '0 100 0');
    sceneContain.appendChild(newScene);
}

function NewMarkers() {
    RemoveMarkers();
    RemovePanels();

    for (let j = 0; j < locations[locationCount].markers.length; j++) {

        newMarker = document.createElement('a-circle');
        newMarker.setAttribute('id', 'marker');
        newMarker.setAttribute('state', 'false');
        newMarker.setAttribute('num', j);
        newMarker.setAttribute('src', '/media/images/PlusTexture.png');
        newMarker.setAttribute('radius', '0.75%');
        newMarker.setAttribute('position', locations[locationCount].markers[j].position);
        newMarker.setAttribute('look-at', '#camera');
        newMarker.addEventListener('mousedown', AugClick);
        sceneContain.appendChild(newMarker);
    }
}

function AugClick(e) {
    var marker = e.target;
    getPanels = document.querySelectorAll("#panel");
    markerState = marker.getAttribute('state');

    if (getPanels.length >= 1) {
        RemovePanels();
    }
    while (true) {
        if (markerState == "false") {
            newPanel = document.createElement('a-image');
            newPanel.setAttribute('id', 'panel');
            count = marker.getAttribute('num');
            newPanel.setAttribute('src', locations[locationCount].markers[count].panel);
            newPanel.setAttribute('height', '14');
            newPanel.setAttribute('width', '10');
            newPanel.setAttribute('position', '0 8 0');
            newPanel.setAttribute('visible', 'true');
            newPanel.addEventListener('mousedown', function () {
                window.location.replace(locations[locationCount].markers[count].link);
            })
            this.setAttribute('state', 'true');
            marker.appendChild(newPanel);
            break;
        }
        else {
            this.setAttribute('state', 'false');
            RemovePanels();
            break;
        }
    }
}

function RemovePanels() {
    getPanels = document.querySelectorAll("#panel");

    for (let i = 0; i < getPanels.length; i++) {
        getPanels[i].parentNode.setAttribute('state', 'false');
        getPanels[i].parentNode.removeChild(getPanels[i]);
    }
}

function RemoveMarkers() {
    getMarkers = document.querySelectorAll("#marker");

    if (getMarkers.length > 0) {
        for (let i = 0; i < getMarkers.length; i++) {
            getMarkers[i].parentNode.removeChild(getMarkers[i]);
        }
    }
}