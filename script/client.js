// Fonction pour filtrer le tableau
function filterTable() {
    // Récupère l'élément input et la valeur saisie
    var input = document.getElementById("myInput");
    var filter = input.value.toLowerCase();

    // Récupère le tableau et toutes ses lignes
    var table = document.getElementById("myTable");
    var rows = table.getElementsByTagName("tr");

    // Initialise le compteur de clients trouvés
    var foundCount = 0;

    // Vérifie si l'en-tête du tableau est visible ou non
    var headerRow = rows[0]; // Première rangée du tableau (l'en-tête)
    var headerVisible = headerRow.style.display !== "none";

    // Parcourt toutes les lignes du tableau
    for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        var display = false;

        // Parcourt toutes les cellules de la ligne
        for (var j = 0; j < cells.length; j++) {
            var cellText = cells[j].textContent || cells[j].innerText;
            var matchIndex = cellText.toLowerCase().indexOf(filter);

            // Vérifie si la valeur saisie se trouve dans la cellule
            if (matchIndex > -1) {
                display = true;

                // Surligne le texte correspondant dans la cellule
                var newText = cellText.substr(0, matchIndex) + "<mark>" + cellText.substr(matchIndex, filter.length) + "</mark>" + cellText.substr(matchIndex + filter.length);
                cells[j].innerHTML = newText;
            } else {
                cells[j].innerHTML = cellText; // Rétablit le texte original si aucun résultat de recherche
            }
        }

        // Affiche ou masque la ligne en fonction du filtre
        if (display || (headerVisible && i === 0)) {
            rows[i].style.display = "";
            if (i !== 0) {
                foundCount++; // Incrémente le compteur si une correspondance est trouvée
            }
        } else {
            rows[i].style.display = "none";
        }
    }

    // Affiche le message seulement après la recherche
    var resultMessage = document.getElementById("resultMessage");
    if (filter === "") {
        resultMessage.textContent = "";
    } else {
        if (foundCount === 0) {
            resultMessage.textContent = "Aucun client trouvé.";
        } else if (foundCount === 1) {
            resultMessage.textContent = "1 client trouvé.";
        } else {
            resultMessage.textContent = foundCount + " clients trouvés.";
        }
    }
}

// Fonction pour exporter le tableau au format Excel
function exportToExcel() {
    var table = document.getElementById("myTable");
    var wb = XLSX.utils.table_to_book(table, { sheet: "Sheet1" });
    XLSX.writeFile(wb, "listes_clients.xlsx");
}

// Récupère l'élément input
var input = document.getElementById("myInput");

// Ajoute un événement de saisie à l'élément input
input.addEventListener("keyup", filterTable);
