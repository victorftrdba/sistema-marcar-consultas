$(document).ready(function () {
    $('#doctor_search').select2({
        placeholder: 'Pesquise pela especialidade...',
        formatNoMatches: function () {
            return "Não há resultados";
        },
        ajax: {
            url: '/admin/searchDoctor',
            dataType: 'json',
            processResults: function (data) {
                return {
                    results: data.data.map(v => {
                        let name = v.name;
                        let specialty = v.specialty;
                        return { id: v.id, text: name + ' - ' + specialty };
                    })
                };
            }
        }
    })

});

var cpfMask = IMask(
    document.getElementById('responsible_cpf'), {
        mask: '000.000.000-00'
    });
