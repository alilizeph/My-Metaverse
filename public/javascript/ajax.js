/*document.getElementById('alpha').addEventListener('change', () => {
    let alpha = document.getElementById('alpha').checked;
    fetch('/videogames' + alpha)
        .then(response => {
            if (response.ok) {
                return response.text();
            } else {
                console.error('Erreur lors de la récupération de la liste des jeux vidéo.');
            }
        })
        .then(data => {
            
            document.querySelector('#video-game-list').innerHTML = data;
        });
});*/
// videogame's list alphabetical sort by videogame's name process 
    document.getElementById('alpha').addEventListener('change', () => {
        fetch('/videogames', {
            method: 'POST',
            body: JSON.stringify({ alpha: alpha }),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            //alphaSort = true;
            if (response.ok) {
                return response.json();
            } else {
                console.error('Erreur lors de la mise à jour de la variable.');
            }
        })
    });
/*
    // videogame's list grade's sort process
document.getElementById('grade').addEventListener('click', () => {
    fetch('/videogames', {
        method: 'POST',
        body: JSON.stringify({ grade: gradeB }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        if (response.ok) {
            console.log('Variable mise à jour avec succès !');
        } else {
            console.error('Erreur lors de la mise à jour de la variable.');
        }
    });
});

    // videogame's list average price's sort process
document.getElementById('price').addEventListener('click', () => {
    fetch('/videogames', {
        method: 'POST',
        body: JSON.stringify({ price: priceB }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        if (response.ok) {
            console.log('Variable mise à jour avec succès !');
        } else {
            console.error('Erreur lors de la mise à jour de la variable.');
        }
    });
});*/