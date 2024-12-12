import $ from 'admin-lte/plugins/jquery/jquery.min.js';

import 'admin-lte/plugins/jquery/jquery.min.js';

import 'bootstrap';
import 'admin-lte/plugins/bootstrap/js/bootstrap.bundle';
import "admin-lte/dist/js/adminlte";
import 'admin-lte/plugins/select2/js/select2.min.js';

import { setupSearchHandler } from './app.recherche';

setupSearchHandler();


$(document).ready(function () {
    // Vérifier si des champs dynamiques à remplir sont spécifiés
    if (window.dynamicSelectManyToOne && Array.isArray(window.dynamicSelectManyToOne)) {
        window.dynamicSelectManyToOne.forEach(function (selectConfig) {
            let { fieldId, fetchUrl, selectedValue } = selectConfig;

            // Vérifiez si le champ existe avant de procéder
            if ($('#' + fieldId).length > 0) {
                $.ajax({
                    url: fetchUrl, // URL pour récupérer les données dynamiques
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        let selectElement = $('#' + fieldId);

                        // Ajouter les options au champ
                        data.forEach(function (item) {
                            let option = new Option(item.name, item.id);
                            selectElement.append(option);
                        });

                        // Pré-sélectionner la valeur si spécifiée
                        if (selectedValue) {
                            selectElement.val(selectedValue);
                        }
                    },
                    error: function () {
                        alert('Erreur lors du chargement des données pour ' + fieldId);
                    }
                });
            }
        });
    }
});
