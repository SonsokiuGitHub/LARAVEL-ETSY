import {validator} from '../../js-components/validator.js';
const form = new validator('#register-form','.form-group','.form-message')
        form.onSubmit = function(formData) {
            console.log(formData)
        }