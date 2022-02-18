particlesJS("RainyBackground",

{
    "particles": {
        "number": {
            "value": 100
        },
        "shape": {
            "type": "image",
            "image": {
                "src": "assets/js/rainy/drop2.png",
                "width": 1,
                "height": 1
            }
        },
        "size": {
            "value": 7,
            "random": true
        },
        "line_linked": {
            "enable": false
        },
        "move": {
            "enable": true,
            "speed": 3,
            "direction": "bottom-right",
            "straight": true
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": false
            }
        },
        "modes": {
            "push": {
                "particles_nb": 12
            }
        }
    }
}


    );