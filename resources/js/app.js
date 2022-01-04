require('./bootstrap');

var phoneMask = IMask(
    document.getElementById('phone'), {
    mask: '(00) 00000-0000'
});

var zipcodeMask = IMask(
  document.getElementById('zipcode'), {
    mask: '00000000'
});

var cpfMask = IMask(
  document.getElementById('cpf'), {
    mask: '000.000.000-00'
});

var crmMask = IMask(
  document.getElementById('crm'), {
    mask: '00000000-0/BR'
  });

const button = document.querySelector('#addPhone');

button.addEventListener('click', function () {
    const input = document.createElement('input');
    input.setAttribute('type', 'number');
    input.setAttribute('name', 'phone[]');
    input.setAttribute('class', 'form-control mt-3');
    input.setAttribute('id', 'newPhone');
    input.setAttribute('placeholder', 'Ex: DD000000000');
    input.setAttribute('maxlength', '11');

    document.querySelector('#phones').appendChild(input);
})

const zipcode = document.querySelector("#zipcode");

zipcode.addEventListener('change', function () {
    const cep = this.value;
    fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => {
            response.json()
                .then(data => {
                    document.querySelector('#address').value = `${data.logradouro} - ${data.bairro} - ${data.localidade}`;
            })
    })
});
