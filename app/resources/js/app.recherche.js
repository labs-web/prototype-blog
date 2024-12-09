import $ from 'admin-lte/plugins/jquery/jquery.min.js';
import { showLoading, hideLoading } from './app.loading';

// Met à jour un paramètre dans l'URL
function updateURLParameter(param, value) {
    const url = new URL(window.location.href);
    if (value === undefined || value === null) {
        url.searchParams.delete(param);
    } else {
        url.searchParams.set(param, value);
    }
    window.history.replaceState({}, "", url);
}

// Récupère un paramètre depuis l'URL
function getUrlParameter(name) {
    return new URLSearchParams(window.location.search).get(name) || "";
}

// Effectue une requête AJAX pour récupérer des données
function fetchData(page = 1, searchValue = "") {
    const url = `${window.location.pathname}/?page=${page}&searchValue=${searchValue}`;

    if (showLoading()) {
        setTimeout(makeRequest, 300); // Ajoute un délai si nécessaire
    } else {
        makeRequest();
    }

    function makeRequest() {
        $.ajax({
            url,
            method: "GET",
            success(data) {
                const newData = $(data);
                $("tbody").html(newData.find("tbody").html());
                $("#card-footer").html(newData.find("#card-footer").html());
                $(".pagination").html(newData.find(".pagination").html() || "");
                hideLoading();
            },
            error(xhr, status, errorThrown) {
                console.error("Statut de l'erreur:", status);
                console.error("Message d'erreur:", errorThrown);
                // console.error("Détails de la réponse:", xhr.responseText);
             
                // Affichage d'un message d'erreur convivial
                let v = xhr.responseJSON;
                alert(v["message"]);
            
                // Vous pouvez également afficher l'erreur dans un élément dédié, comme un message au-dessus du tableau.
                $("#error-message").text("Une erreur s'est produite. Veuillez vérifier votre connexion ou réessayer plus tard.");
            },
        });

        // Met à jour l'URL avec les nouveaux paramètres
        updateURLParameter("page", page);
        updateURLParameter("searchValue", searchValue);
    }
}

// Initialise les gestionnaires d'événements
export function setupSearchHandler() {
    $(document).ready(() => {

         // Check if the element with the ID "crud_search_input" exists
        if ($("#crud_search_input").length === 0) {
            // If it doesn't exist, return early and do nothing
            return;
        }

        // Initialisation des paramètres à partir de l'URL
        const searchValue = getUrlParameter("searchValue");
        const page = getUrlParameter("page") || 1;

        if (searchValue) $("#crud_search_input").val(searchValue);

        fetchData(page, searchValue);

        // Gestion de la pagination
        $("body").on("click", ".pagination .page-link", (event) => {
            event.preventDefault();
            // Récupérer le numéro de page
            const page = $(event.target).data("page") || $(event.target).attr("data-page") || $(event.target).text().trim();


            const searchValue = $("#crud_search_input").val();
            fetchData(page, searchValue);
        });

        // Gestion des recherches
        $("body").on("keyup", "#crud_search_input", () => {
            const searchValue = $("#crud_search_input").val();
            if (searchValue === "") {
                updateURLParameter("searchValue", undefined);
                fetchData(1, "");
            } else {
                fetchData(1, searchValue);
            }
        });

        // Gestion de l'import
        $(document).on("change", "#upload", () => {
            $("#importForm").submit();
        });

        // // Initialisation des dropdowns
        // $(".dropdown-toggle").dropdown();
    });
}