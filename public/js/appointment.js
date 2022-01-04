/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/appointment.js ***!
  \*************************************/
$(document).ready(function () {
  $('#doctor_search').select2({
    placeholder: 'Pesquise pela especialidade...',
    formatNoMatches: function formatNoMatches() {
      return "Não há resultados";
    },
    ajax: {
      url: '/admin/searchDoctor',
      dataType: 'json',
      processResults: function processResults(data) {
        return {
          results: data.data.map(function (v) {
            var name = v.name;
            var specialty = v.specialty;
            return {
              id: v.id,
              text: name + ' - ' + specialty
            };
          })
        };
      }
    }
  });
});
var cpfMask = IMask(document.getElementById('responsible_cpf'), {
  mask: '000.000.000-00'
});
/******/ })()
;